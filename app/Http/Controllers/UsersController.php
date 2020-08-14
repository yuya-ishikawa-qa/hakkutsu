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

        $id = Auth::id();
        // $users = User::findOrFail($id);



        $user = User::findOrFail($id);
        $data = $request->except('action');
        // $user->content = $request->content;
        // $user->save();

        $user = new User();
        $user->name = $data['name'];
        $user->name_kana = $data['name_kana'];
        $user->postal_code = $data['postal_code'];
        $user->address_1 = $data['address_1'];
        $user->address_2 = $data['address_2'];
        $user->address_3 = $data['address_3'];
        $user->tel = $data['tel'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();
        return redirect('/')->with('my_status', __('変更が更新されました'));
        // $user = User::findOrFail($id);
        // $user->name = User::get('name');
        // $user->name_kana = User::get('name_kana');
        // $user->postal_code = User::get('postal_code');
        // $user->address_1 = User::get('address_1');
        // $user->address_2 = User::get('address_2');
        // $user->address_3 = User::get('address_3');
        // $user->tel = User::get('tel');
        // $user->email = User::get('email');
        // $user->password = User::get('password');
        // $user->save();
        // return Redirect::back()->with('/', '変更が更新されました');
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
