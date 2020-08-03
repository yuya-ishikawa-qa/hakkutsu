<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Store;
use App\Item;
use DB;
use App\Http\Requests\ItemRequest;

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

    public function create($id)
    {
        // $user = \Auth::user();
        // $stores = $user->stores();
        // $data=[
        //     'user' => $user,
        //     'stores' => $stores,
        // ];
        $user = \Auth::user();
        $store = Store::findOrFail($id);
        $items = $store->items();
        $data = [
            'user' => $user,
            'store' => $store,
            'items' => $items,
        ];
        return view('items.create',$data);
    }

    public function confirm(ItemRequest $request,$id)
    {
        $store = Store::findOrFail($id);
        $post_data = $request->except('image_path');
        $path = $request->file('image_path');
        $temp_path = $path->store('public/temp');
        //str_replaceメソッドで、public/をstorage/に置き換え
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);
        $data = array(
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path, 
            'store' => $store,
        );
        // dd($data);
        $request->session()->put([
            'data' => $data,
            'post_data' => $post_data,
        ]);
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
            // $store->user_id = auth()->id();
            $item->save();
            return redirect('store/management/request')->with([
                'flash_message' => '送信しました',
            ]);
        }
}