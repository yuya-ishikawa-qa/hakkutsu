<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;

class UsersController extends Controller
{

    public function index()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        return view('users.index', $user);
    }


    public function edit()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        return View::make('users.edit')->with('user', $user);
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->all())->save();
        return redirect('/')->with('my_status', __('登録内容が更新されました'));
    }


    public function delete_confirm(User $user)
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        return view('users.delete_confirm', $user);
    }


    public function destroy($id)
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        $user = User::find($id);
        $user->delete();
        return redirect('/')->with('my_status', __('退会しました'));
    }
}
