<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MypageController extends Controller
{
    public function index()
    {
        return view('mypage.index');
    }

    public function show($id)
    {
        $mypage = User::find($id);

        return view('mypage.show', [
            'mypage' => $mypage,
        ]);
        return view('mypage.show');
    }

    public function edit()
    {
        return view('mypage.edit');
    }

    public function destroy()
    {
        return view('mypage.destroy');
    }
}