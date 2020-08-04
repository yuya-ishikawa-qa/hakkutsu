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

    public function store(StoreUser $request)
    {
        return redirect('/' . $user->id)->with('my_status', __('Created new user.'));
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

    public function destroy(User $user)
    {
        return redirect('/')->with('my_status', __('Deleted a user.'));
    }

}
