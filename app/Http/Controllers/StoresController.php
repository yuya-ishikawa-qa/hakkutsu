<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Store;
use App\Item;
use DB;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\StoreupdateRequest;

class StoresController extends Controller
{
    public function management()
    {
        //ログインしているuserのidを変数に代入
        $id = Auth::id();
        //上記のidよりuser情報を取得
        $user = User::findOrFail($id);
        //userのもつstoreデータをidで昇順で並べ、変数に代入
        $stores = $user->stores()->orderBy('id', 'asc')->paginate(9);
        //storeの持つitem情報を変数に代入
        $items = $stores->items();

        //上記の変数を配列型式で変数に代入
        $data = [
            'user' => $user,
            'stores' => $stores,
            'items' => $items,
        ];

        return view('stores.management', $data);
    }

    public function create()
    {
        //ログインしているuserの情報を変数に代入
        $user = \Auth::user();
        //userのもつstoreデータを変数に代入
        $stores = $user->stores();

        //上記の変数を配列にして代入
        $data=[
            'user' => $user,
            'stores' => $stores,
        ];

        return view('stores.create');
    }

    public function show()
    {
        return view('stores.detail');
    }

    public function confirm(StoreRequest $request)
    {
        //requestのimage_pathを除いて変数に代入
        $post_data = $request->except('image_path');

        //アップロードされたfileに関する情報としてimage_pathを変数に代入
        $path = $request->file('image_path');
        //$pathをpublic/tempに保存し、位置を変数に代入
        // $temp_path = $path->store('public/temp');
        $temp_path = Storage::disk('s3')->put('public/temp',$path, 'public');
        //str_replaceメソッドで、public/をstorage/に置き換え
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);

        //一時保存ディレクトリと一時読み込みディレクトリを配列に代入
        $data = array(
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path,
        );
        //セッションにデータを保存
        $request->session()->put([
            'data' => $data,
            'post_data' => $post_data,
        ]);

        return view('stores.confirm')->with([
            'post_data' => $post_data,
            'data' => $data,
        ]);
    }

        public function store(Request $request)
        {
            //セッションから必要なデータを取得
            $data = $request->session()->get('data');
            $post_data = $request->session()->get('post_data');

            //上記のデータを変数に代入
            $temp_path = $data['temp_path'];
            $read_temp_path = $data['read_temp_path'];
            //ファイル名は$temp_pathから"public/temp/を空白で除いたもの
            $filename = str_replace('public/temp/', '', $temp_path);
            //画像を保存するパスは"public/stores_image/xxx.jpeg"
            $storage_path = 'public/stores_image/'.$filename;

            //dataのセッション情報を破棄
            $request->session()->forget('data');
            //Storageファサードのmoveメソッドで、第一引数->第二引数へファイルを移動
            Storage::move($temp_path, $storage_path);
            //publicをstorageに置き換え、読み込みディレクトリを変数に保存
            $read_path = str_replace('public/', 'storage/', $storage_path);

            //データベースへの保存処理
            $store = new Store();
            $store->image_path = $read_path;
            $store->store_name = $post_data['store_name'];
            $store->address = $post_data['address'];
            $store->tel = $post_data['tel'];
            $store->mail = $post_data['mail'];
            $store->postal = $post_data['postal'];
            $store->description = $post_data['description'];
            $store->user_id = auth()->id();
            $store->save();

            return redirect('store/management/request')->with([
                'flash_message' => '送信しました',
            ]);
        }

        public function edit($id)
        {
            //情報を取得し、変数に代入
            $user = \Auth::user();
            $store = Store::findOrFail($id);

            $data=[
                'user' => $user,
                'store' => $store,
            ];

            return view('stores.edit',$data);
        }

        public function update(StoreupdateRequest $request,$id)
        {
             // 画像がアップロードされたら保存
            if ($request->image_path) {
                //アップロードされたfileを変数に代入
                $path = $request->file('image_path');
                //ファイルを保存し、保存場所を変数に代入
                $storage_path = $path->store('public/stores_image');

                //publicをstorageに置き換え、読み込み場所を変数に保存
                $read_path = str_replace('public/', 'storage/', $storage_path);
                //idからstore情報を変数に代入
                $store = Store::findOrFail($id);
                //読み込み場所をstoreデータベースに保存
                $store->image_path = $read_path;
                $store->save();
                }

            //image_pathを除く情報を変数に代入
            $post_data = $request->except('image_path');
            //上記の変数の配列をそれぞれ代入
            $params = array(
                'store_name' => $post_data['store_name'],
                'postal' => $post_data['postal'],
                'address' => $post_data['address'],
                'tel' => $post_data['tel'],
                'mail' => $post_data['mail'],
                'description' => $post_data['description'],
            );

            $store = Store::findOrFail($id);
            //データベースをまとめて更新
            $store->fill($params)->save();

            return redirect('store/management/request')->with([
                'flash_message' => '変更しました。',
            ]);
        }

        public function itemList($id)
        {
            //情報を取得し、変数に代入
            $user = \Auth::user();
            $store = Store::findOrFail($id);
            $items = $store->items()->orderBy('id', 'asc')->paginate(9);
            $data = [
                'user' => $user,
                'store' => $store,
                'items' => $items,
            ];

            return view('stores.item_list', $data);
        }

}
