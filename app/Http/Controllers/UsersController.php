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

    public function show($id)
    {
        $users = User::find($id);

        return view('users.show', [
            'users' => $users,
        ]);
        return view('users.show');
    }

    public function edit($id)
    {
        $users = User::find($id);

        return view('users.edit', [
            'users' => $users,
        ]);
        return view('users.edit');
    }

    public function update($id)
    {
        $users = User::find($id);

        return view('users.update', [
            'users' => $users,
        ]);
        return view('users.update');
    }

    public function destroy($id)
    {
        $users = User::find($id);

        return view('users.destroy', [
            'users' => $users,
        ]);
        return view('users.destroy');
    }

}
