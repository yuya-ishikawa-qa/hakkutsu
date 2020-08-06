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
        $taxes = \App\Tax::orderBy('code','asc')->pluck('tax_rate', 'code');
        $store = Store::findOrFail($store_id);
        $post_data = $request->except('image_path');
        $path = $request->file('image_path');
        $temp_path = $path->store('public/temp');
        //str_replaceメソッドで、public/をstorage/に置き換え
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);
        $data = array(
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path, 
            'store' => $store,
            'taxes' => $taxes,
        );
        $request->session()->put([
            'data' => $data,
            'post_data' => $post_data,
        ]);
        //確認画面でtax_idが1なら8%,それ以外なら10%を表示 
        if($post_data['tax_id'] == '1'){
            $post_data['tax_id'] = '8%';
        }else{
            $post_data['tax_id'] = '10%';
        }
        return view('items.confirm')->with([
            'post_data' => $post_data,
            'data' => $data,
        ]);
    }
    // 完了フォーム
        public function store(Request $request)
        {
            $data = $request->session()->get('data');
            $post_data = $request->session()->get('post_data');
            $store = $data['store'];
            $temp_path = $data['temp_path'];
            $read_temp_path = $data['read_temp_path'];
            //ファイル名は$temp_pathから"public/temp/を空白で除いたもの
            $filename = str_replace('public/temp/', '', $temp_path);
            //画像を保存するパスは"public/stores_image/xxx.jpeg"
            $storage_path = 'public/stores_image/'.$filename;
            $request->session()->forget('data');
            //Storageファサードのmoveメソッドで、第一引数->第二引数へファイルを移動
            Storage::move($temp_path, $storage_path);
            //publicをstorage/img/public/に置き換え、保存ファイルに移動
            $read_path = str_replace('public/', 'storage/', $storage_path);
            $item = new Item();
            $item->image_path = $read_path;
            $item->item_name = $post_data['item_name'];
            $item->status = $post_data['status'];
            $item->stock = $post_data['stock'];
            $item->price = $post_data['price'];
            $item->description = $post_data['description'];
            $item->tax_id = $post_data['tax_id'];
            $item->store_id = $store->id;
            $item->save();
            return redirect()->route('stores.management')->with([
                'flash_message' => '出品しました',
            ]);
        }

        public function edit($store_id,$item_id)
        {   
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
                $path = $request->file('image_path');
                $storage_path = $path->store('public/stores_image');
                //publicをstorage/img/public/に置き換え、保存ファイルに移動
                $read_path = str_replace('public/', 'storage/', $storage_path);
                $item = Item::findOrFail($item_id);
                $item->image_path = $read_path;
                $item->save();
                }
            $post_data = $request->except('image_path');
            $params = array(
                'item_name' => $post_data['item_name'],
                'status' => $post_data['status'],
                'stock' => $post_data['stock'],
                'price' => $post_data['price'],
                'description' => $post_data['description'],
                'tax_id' => $post_data['tax_id'],
            );  
            $item = Item::findOrFail($item_id);
            $item->fill($params)->save();
            return redirect()->route('stores.management')->with([
                'flash_message' => '商品を編集しました',
            ]);
        } 

        public function destroy($store_id,$item_id)
        {   
            $store = Store::findOrFail($store_id);
            $item = Item::findOrFail($item_id);
            $item->delete();
            return redirect()->route('stores.management')->with([
                'flash_message' => '商品を削除しました。',
            ]);
        }
}