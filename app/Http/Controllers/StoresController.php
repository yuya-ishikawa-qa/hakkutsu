<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoresController extends Controller
{
    public function index()
    {
        return view('stores.index');
    }

    public function show()
    {
        return view('stores.detail');
    }
}
