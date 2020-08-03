<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        return view('users.index', $user);
    }
    public function show()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        return view('users.show', $user);
    }
    public function edit()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        return view('users.edit', $user);
    }
    public function update()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        return view('users.update', $user);
    }

    public function destroy()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        return view('users.destroy', $user);
    }

}
