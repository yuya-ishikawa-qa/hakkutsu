<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use View;
use App\Order;
use App\OrdersDetail;
use App\Http\Requests\UsersDestinationRequest;
use App\Item;

class UsersController extends Controller
{

    public function toppage()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        $item = Item::findOrFail($id);

        $newItemInformation = Item::latest()->take(4)->get();

        return view('toppage')->with([
            'item' => $item,
            'newItemInformation' => $newItemInformation,
        ]);
    }

    public function index()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);

        $item = Item::findOrFail($id);
        $newItemInformation = Item::where('id', '!=', $id)->inRandomOrder()->take(4)->get();

        return view('users.index', $user)->with([
            'item' => $item,
            'newItemInformation' => $newItemInformation,
        ]);
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
    //送付先の登録画面表示
    public function createDestination()
    {
        $id = Auth::id();
        $user = User::findOrFail($id);
        return View::make('users.create_destination')->with('user', $user);
    }
    //送付先情報の登録・更新
    public function storeDestination(UsersDestinationRequest $request)
    {
        $id = Auth::id();   
        $user = User::findOrFail($id);
        //ユーザーインスタンスにリクエスト情報を更新
        $user->fill($request->all())->save();
        //フラッシュメッセージの登録
        session()->flash('flash_message', '登録内容が更新されました');

        return redirect()->route('checkout');
    }
}
