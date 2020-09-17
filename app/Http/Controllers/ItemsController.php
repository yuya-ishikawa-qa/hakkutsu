<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Store;
use App\Item;
use App\Tax;
use DB;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\ItemupdateRequest;

class ItemsController extends Controller
{
    public function index()
    {
        return view('items.index');
    }

    public function show()
    {
        return view('items.detail');
    }

    public function create($store_id)
    {
        //情報を取得し、変数に代入
        $taxes = \App\Tax::orderBy('code','asc')->pluck('tax_rate', 'code');
        $user = \Auth::user();
        $store = Store::findOrFail($store_id);
        $items = $store->items();

        $data = [
            'user' => $user,
            'store' => $store,
            'items' => $items,
            'taxes' => $taxes,
        ];
        
        return view('items.create',$data);
    }

    public function confirm(ItemRequest $request,$store_id)
    {
        //情報を取得し、変数に代入
        $taxes = \App\Tax::orderBy('code','asc')->pluck('tax_rate', 'code');
        $store = Store::findOrFail($store_id);

        //image_pathを除いた情報を変数に代入
        $post_data = $request->except('image_path');
        //アップロードされた情報を変数に代入
        $path = $request->file('image_path');
        //ファイルを指定した位置に保存し、変数に代入
        // $temp_path = $path->store('public/temp');
        $temp_path = Storage::disk('s3')->put('public/temp',$path, 'public');
        //str_replaceメソッドで、public/をstorage/に置き換え
        // $read_temp_path = str_replace('public/', 'storage/', $temp_path);
        // dd($temp_path);
        //上記で取得した変数を代入
        $data = array(
            'temp_path' => $temp_path,
            'store' => $store,
            'taxes' => $taxes,
        );
        //セッションに情報を保存
        $request->session()->put([
            'data' => $data,
            'post_data' => $post_data,
            'temp_path' => $temp_path,
        ]);

        //確認画面でtax_idが1なら8%,それ以外なら10%を表示
        if($post_data['tax_id'] == '1'){
            $post_data['tax_id'] = '8%';
        }else{
            $post_data['tax_id'] = '10%';
        }

        return view('items.confirm')->with([
            'data' => $data,
            'post_data' => $post_data,
            'temp_path' => $temp_path,
        ]);
    }
    // 完了フォーム
        public function store(Request $request)
        {
            //セッションから必要なデータを取得
            $data = $request->session()->get('data');
            $post_data = $request->session()->get('post_data');
            $temp_path = $request->session()->get('temp_path');
            //上記のデータを変数に代入
            $store = $data['store'];

            //ファイル名は$temp_pathから"public/temp/を空白で除いたもの
            $filename = str_replace('public/temp/', '', $temp_path);
            //画像を保存するパスは"public/stores_image/xxx.jpeg"
            $storage_path = 'public/stores_image/'.$filename;

            //dataのセッション情報を破棄
            $request->session()->forget('data');
            //Storageファサードのmoveメソッドで、第一引数->第二引数へファイルを移動
            Storage::disk('s3')->move($temp_path, $storage_path);
            //publicをstorage/img/public/に置き換え、保存ファイルに移動
            
            //データベースへの保存処理
            $item = new Item();
            $item->image_path = $storage_path;
            $item->item_name = $post_data['item_name'];
            $item->status = $post_data['status'];
            $item->stock = $post_data['stock'];
            $item->price = $post_data['price'];
            $item->description = $post_data['description'];
            $item->tax_id = $post_data['tax_id'];
            $item->store_id = $store->id;
            $item->timestamps = false;
            $item->save();

            return redirect()->route('stores.management')->with([
                'flash_message' => '出品しました',
            ]);
        }

        public function edit($store_id,$item_id)
        {   
            //情報を取得し、変数に代入
            $taxes = \App\Tax::orderBy('code','asc')->pluck('tax_rate', 'code');
            $user = \Auth::user();
            $store = Store::findOrFail($store_id);
            $item = Item::findOrFail($item_id);

            $data=[
                'user' => $user,
                'store' => $store,
                'item' => $item,
                'taxes' => $taxes,
            ];

            return view('items.edit',$data);
        }

        public function update(ItemupdateRequest $request,$store_id,$item_id)
        {
                // 画像がアップロードされたら保存
            if ($request->image_path) {
                //ファイル情報を変数に代入
                $path = $request->file('image_path');
                //指定の場所にファイルを保存し、変数に代入
                $storage_path = $path->store('public/stores_image');
                //publicをstorageに置き換え、読み込み場所を変数に代入
                $read_path = str_replace('public/', 'storage/', $storage_path);
                //アイテム情報を取得
                $item = Item::findOrFail($item_id);
                //読み込み場所をデータベースに保存
                $item->image_path = $read_path;
                $item->save();
                }

            //image_pathを除いて変数に代入
            $post_data = $request->except('image_path');
            //上記の変数を変数に代入
            $params = array(
                'item_name' => $post_data['item_name'],
                'status' => $post_data['status'],
                'stock' => $post_data['stock'],
                'price' => $post_data['price'],
                'description' => $post_data['description'],
                'tax_id' => $post_data['tax_id'],
            );  
            //item情報を取得し、変数に代入
            $item = Item::findOrFail($item_id);
            //データベースに保存
            $item->fill($params)->save();

            return redirect()->route('stores.management')->with([
                'flash_message' => '商品を編集しました',
            ]);
        }

        public function destroy($store_id,$item_id)
        {   
            //情報を取得し、変数に代入
            $store = Store::findOrFail($store_id);
            $item = Item::findOrFail($item_id)
            ;
            //データベースから削除処理
            $item->delete();

            return redirect()->route('stores.management')->with([
                'flash_message' => '商品を削除しました。',
            ]);
        }
        
}