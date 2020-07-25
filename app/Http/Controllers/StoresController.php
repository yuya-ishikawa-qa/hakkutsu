<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Store; 

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
    
}