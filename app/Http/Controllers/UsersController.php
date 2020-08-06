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

    public function store(User $request)
    {
        return redirect('users.index')->with('my_status', __('Created new user.'));
    }

    public function edit()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        return view('users.edit', $user);
    }

    public function update(Request $request, User $user)
    {
        return redirect('/' . $user->id)->with('my_status', __('Updated a user.'));
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
