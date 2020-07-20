<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    // 完了フォーム
        public function store()
        {
            $data = session()->all();
            DB::table('stores')->insert([
                    'user_id' => auth()->id(),
                    'store_name' => $data["store_name"],
                    'postal' => $data["postal"],
                    'address' => $data["address"],
                    'tel' => $data["tel"],
                    'mail' => $data["mail"],
                    'path' => $data["path"],
                    'business_hours' => $data["business_hours"],
                    'description' => $data["description"]
                    ]); 
            return redirect('store/management/request')->with('flash_message', '送信しました');
        }

        public function confirm(Request $request)
    {
                $this->validate($request,[
            'store_name' => ['required', 'string', 'max:255'],
            'postal' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:50'],
            'mail' => ['required', 'string', 'max:50'],
            'path' => ['required', 'string', 'max:255'],
            'business_hours' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
        ]);
        $data = $request->all();
        $request->session()->put($data); 
        
        return view('store.management.confirmation', compact("data"));
    }   
}