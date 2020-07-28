<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Store; 
use DB;

class StoresController extends Controller
{
    public function management()
    {
        $id = Auth::id();
        $user=User::find($id);
        $stores = $user->stores()->orderBy('id', 'asc')->paginate(9);
        $data=[
            'user' => $user,
            'stores' => $stores,
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
        return view('stores.create', $data);
    }

    public function show()
    {
        return view('stores.detail');
    }

    public function confirm(Request $request)
    {
        $this->validate($request,[
            'store_name' => ['required', 'string', 'max:255'],
            'postal' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:50'],
            'mail' => ['required', 'string', 'max:50'],
            'image_path' => ['required', 'image'],
            'business_hours' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);
        $post_data = $request->except('image_path');
        $path = $request->file('image_path');
        $temp_path = $path->store('public/temp');
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);
        //str_replaceメソッドで、public/をstorage/に置き換え
        
        $data = array(
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path, 
            'store_name' => $post_data['store_name'],
            'postal' => $post_data['postal'],
            'address' => $post_data['address'],
            'tel' => $post_data['tel'],
            'mail' => $post_data['mail'],
            'business_hours' => $post_data['business_hours'],
            'description' => $post_data['description'],
        );
        $request->session()->put('data', $data);
        return view('stores.confirm')->with('data',$data);
    }
    // 完了フォーム
        public function store(Request $request)
        {
            $data = $request->session()->get('data');
            $temp_path = $data['temp_path'];
            $read_temp_path = $data['read_temp_path'];
            $filename = str_replace('public/temp/', '', $temp_path);
            //ファイル名は$temp_pathから"public/temp/を空白で除いたもの
            $storage_path = 'public/stores_image/'.$filename;
            //画像を保存するパスは"public/stores_image/xxx.jpeg"
            $request->session()->forget('data');
            Storage::move($temp_path, $storage_path);
            //Storageファサードのmoveメソッドで、第一引数->第二引数へファイルを移動
            $read_path = str_replace('public/', 'storage/', $storage_path);
            //publicをstorage/img/public/に置き換え、保存ファイルに移動
            
            $store = new Store();
            $store->image_path = $read_path;
            $store->store_name = $data['store_name'];
            $store->address = $data['address'];
            $store->tel = $data['tel'];
            $store->mail = $data['mail'];
            $store->business_hours = $data['business_hours'];
            $store->postal = $data['postal'];
            $store->description = $data['description'];
            $store->user_id = auth()->id();
            $store->save();
            return redirect('store/management/request')->with([
                'flash_message'=> '送信しました',
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

        public function update(Request $request,$id)
        {
            $this->validate($request,[
                'store_name' => ['required', 'string', 'max:255'],
                'postal' => ['required', 'string', 'max:20'],
                'address' => ['required', 'string', 'max:255'],
                'tel' => ['required', 'string', 'max:50'],
                'mail' => ['required', 'string', 'max:50'],
                'image_path' => ['image'],
                'business_hours' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string', 'max:255'],
            ]);
                // 画像がアップロードされたら保存する
            if ($request->image_path) {
                $path = $request->file('image_path');
                $storage_path = $path->store('public/stores_image');
                $read_path = str_replace('public/', 'storage/', $storage_path);
                //publicをstorage/img/public/に置き換え、保存ファイルに移動
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
                'flash_message'=> '変更しました。',
            ]);
        }   
}