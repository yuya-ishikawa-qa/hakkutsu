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
        $id = Auth::id();
        $user = User::findOrFail($id);
        $stores = $user->stores()->orderBy('id', 'asc')->paginate(9);
        // dd($stores);
        // @foreach ($stores as $store)
        $items = $stores->items();
        // dd($items);
        // @endforeach
        $data = [
            'user' => $user,
            'stores' => $stores,
            'items' => $items,
        ];
        return view('stores.management', $data);
    }

    public function create()
    {
        $user = \Auth::user();
        $stores = $user->stores();
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
        $post_data = $request->except('image_path');
        $path = $request->file('image_path');
        $temp_path = $path->store('public/temp');
        //str_replaceメソッドで、public/をstorage/に置き換え
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);
        $data = array(
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path, 
        );
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
            $data = $request->session()->get('data');
            $post_data = $request->session()->get('post_data');
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

            $store = new Store();
            $store->image_path = $read_path;
            $store->store_name = $post_data['store_name'];
            $store->address = $post_data['address'];
            $store->tel = $post_data['tel'];
            $store->mail = $post_data['mail'];
            $store->business_hours = $post_data['business_hours'];
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
                $path = $request->file('image_path');
                $storage_path = $path->store('public/stores_image');
                //publicをstorage/img/public/に置き換え、保存ファイルに移動
                $read_path = str_replace('public/', 'storage/', $storage_path);
                $store = Store::findOrFail($id);
                $store->image_path = $read_path;
                $store->save();
                }

            $post_data = $request->except('image_path');
            $params = array(
                'store_name' => $post_data['store_name'],
                'postal' => $post_data['postal'],
                'address' => $post_data['address'],
                'tel' => $post_data['tel'],
                'mail' => $post_data['mail'],
                'business_hours' => $post_data['business_hours'],
                'description' => $post_data['description'],
            );  
            $store = Store::findOrFail($id);
            $store->fill($params)->save();
            return redirect('store/management/request')->with([
                'flash_message' => '変更しました。',
            ]);
        }   
        public function itemlist($id)
        {
            $user = \Auth::user();
            $store = Store::findOrFail($id);
            $items = $store->items()->orderBy('id', 'asc')->paginate(9);
            $data = [
                'user' => $user,
                'store' => $store,
                'items' => $items,
            ];
            return view('stores.itemlist', $data);
        }


//         public function createitem($id)
//         {
//             // $user = \Auth::user();
//             // $stores = $user->stores();
//             // $data=[
//             //     'user' => $user,
//             //     'stores' => $stores,
//             // ];
//             $user = \Auth::user();
//             $store = Store::findOrFail($id);
//             $items = $store->items();
//             $data = [
//                 'user' => $user,
//                 'store' => $store,
//                 'items' => $items,
//             ];
//             return view('items.create',$data);
//         }
// 
}