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
    public function index()
    {
        $id = Auth::id();
        $user=User::find($id);
        
        $stores=$user->stores;
        foreach ($stores as $store) {
        }
        return view('store.management.index', ['store'=>$store]);
    }

    public function create()
    {
        $user = \Auth::user();
        $stores = $user->stores()->orderBy('id', 'desc')->paginate(9);
        
        $data=[
            'user' => $user,
            'stores' => $stores,
        ];
        return view('store.management.create', $data);
    }

    public function show()
    {
        return view('stores.detail');
    }

    // public function store(Request $request)
    // {
    //     $request->user()->stores()->create([
    //         'store_name' => $request->store_name,
    //         'postal' => $request->postal,
    //         'address' => $request->address,
    //         'tel' => $request->tel,
    //         'mail' => $request->mail,
    //         'path' => $request->path,
    //         'business_hours' => $request->business_hours,
    //         'description' => $request->description,
    //     ]);
    //     return view('store.management.confirm');
    // }

    public function confirm(Request $request)
    {
                $this->validate($request,[
            'store_name' => ['required', 'string', 'max:255'],
            'postal' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:50'],
            'mail' => ['required', 'string', 'max:50'],
            'path' => ['required', 'image'],
            'business_hours' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);
        $post_data = $request->except('path');
        $path = $request->file('path');
        $temp_path = $path->store('public/temp');
        $read_temp_path = str_replace('public/', 'storage/', $temp_path);
        //str_replaceメソッドで、public/をstorage/に置き換え
        $store_name = $post_data['store_name'];
        $postal = $post_data['postal'];
        $address = $post_data['address'];
        $tel = $post_data['tel'];
        $mail = $post_data['mail'];
        $business_hours = $post_data['business_hours'];
        $description = $post_data['description'];
        
        $data = array(
            'temp_path' => $temp_path,
            'read_temp_path' => $read_temp_path, 
            'store_name' => $store_name,
            'postal' => $postal,
            'address' => $address,
            'tel' => $tel,
            'mail' => $mail,
            'business_hours' => $business_hours,
            'description' => $description,
        );
        $request->session()->put('data', $data);
        return view('store.management.confirmation', compact('data'));
    }
    // 完了フォーム
        public function store(Request $request)
        {
            
            $data = $request->session()->get('data');
            // dd($request);
            // dd($data);
            // dd($request->session());
            // ->attributes()
            // dd($data['temp_path']);
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
            
            $store_name = $data['store_name'];
            $postal = $data['postal'];
            $address = $data['address'];
            $tel = $data['tel'];
            $mail = $data['mail'];
            $business_hours = $data['business_hours'];
            $description = $data['description'];
            $user_id = auth()->id();
            
            $store = new Store();
            $store->path = $read_path;
            $store->store_name = $store_name;
            $store->address = $address;
            $store->tel = $tel;
            $store->mail = $mail;
            $store->business_hours = $business_hours;
            $store->postal = $postal;
            $store->description = $description;
            $store->user_id = $user_id;
            $store->save();
            return view('store/management/request')->with('path',$read_path);
            // return view('image_complete');

            // DB::table('stores')->insert([
            //         'user_id' => auth()->id(),
            //         'store_name' => $data["store_name"],
            //         'postal' => $data["postal"],
            //         'address' => $data["address"],
            //         'tel' => $data["tel"],
            //         'mail' => $data["mail"],
            //         'path' => $data["path"],
            //         'business_hours' => $data["business_hours"],
            //         'description' => $data["description"]
            //         ]); 
            // return redirect('store/management/request')->with('flash_message', '送信しました');
        }

        public function edit($id)
        {
            $post = Store::findOrFail($id);
            return view('store.edit',['store' => $store,]);
        }

   
}