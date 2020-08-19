<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Order;
use App\OrdersDetail;

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

    public function orderList()
    {
        //ログインしているuserのidを変数に代入
        $id = Auth::id();
        //上記のidよりuser情報を取得
        $user = User::findOrFail($id);
        //userのもつstoreデータをidで昇順で並べ、変数に代入
        $orders = $user->orders()->orderBy('id', 'desc')->paginate(9);

        //上記の変数を配列型式で変数に代入
        $data = [
            'user' => $user,
            'orders' => $orders,
        ];

        return view('users.order_list', $data);
    }

    public function ordersDetails($id)
    {
        //情報を取得し、変数に代入
        $user = \Auth::user();
        $order = Order::findOrFail($id);
        $orders_details = $order->ordersDetails()->orderBy('id', 'asc')->paginate(9);
        
        //配列型式で変数に代入
        $data = [
            'user' => $user,
            'order' => $order,
            'orders_details' => $orders_details,
        ];

        return view('users.orders_details', $data);
    }
}
