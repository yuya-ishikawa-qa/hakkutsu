<?php

namespace App\Http\Controllers;
use App\User; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(9);
    
        return view('store.management.index', [
            'users' => $users,
        ]);
    }

    public function show()
    {
        return view('users.show');
    }
    
    public function destroy()
    {
        return view('users.destroy');
    }
}
