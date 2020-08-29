<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Item;
use Session;
use App\Cart;
use App\Order;
use App\OrdersDetail;
use Illuminate\Support\Collection;
use DB;
use Stripe\Stripe;
use Stripe\Charge;
use App\Mail\OrderMail;

class CartController extends Controller
{
    //カートに商品群を追加する
    public function getAddToCart(Request $request, $id){
        //itemを取得し変数に代入
        $item = Item::find($id);
        // sessionが変数cartを持つなら、変数に代入し、ないならnullを代入
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        //古いカート情報よりインスタンスを生成
        $cart = new Cart($oldCart);
        
        //Cart.phpのadd関数を使用
    	$cart->add($item, $item->id);
        
        //sessionに変数を保存
    	$request->session()->put('cart', $cart);
        //フラッシュメッセージを登録
        session()->flash('flash_message', 'カートに入れました');

        return redirect()->route('items.detail',[
            'item' => $item,
        ]
    );
    }

    //カート情報を表示する
    public function getCart(){
        //指定のsession変数がない場合、viewを返す
        if(!Session::has('cart')){
            return view('cart.index');
        }
        //指定のsession変数を変数に代入
        $oldCart = Session::get('cart');
        //インスタンスを生成する
        $cart = new Cart($oldCart);

        //生成したインスタンスをviewに渡す
        return view('cart.index',['cart_items'=> $cart->cart_items, 'totalPrice'=>$cart->totalPrice]);
    }

    //カートの特定の商品群の数量を1増やす
    public function getIncreaseByOne($id){
        // sessionが変数cartを持つなら、変数に代入し、ないならnullを代入
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        //インスタンスを生成
        $cart = new Cart($oldCart);
        //Cart.phpの関数を使用
        $cart->increaseByOne($id);
        
        //cartのitemが０より多いなら、
        if(count($cart->cart_items)>0){
        //sessionに保存
          Session::put('cart', $cart);
        }else{
        //そうでないなら指定のsessionを破棄
          Session::forget('cart');
        }
  
        return redirect()->route('cart.index');
      }
    
    //カートの特定の商品群の数量を1減らす
    public function getReduceByOne($id){
        // sessionが変数cartを持つなら、変数に代入し、ないならnullを代入
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        //インスタンスを生成
        $cart = new Cart($oldCart);
        //Cart.phpの関数を使用
        $cart->reduceByOne($id);
        
        //cartのitemが０より多いなら、
        if(count($cart->cart_items)>0){
        //sessionに保存
          Session::put('cart', $cart);
        }else{
        //そうでないなら指定のsessionを破棄
          Session::forget('cart');
        }
  
        return redirect()->route('cart.index');
      }
    
    //カートから商品群ごと削除する
    public function getRemoveItem($id){
       // sessionが変数cartを持つなら、変数に代入し、ないならnullを代入
       $oldCart = Session::has('cart')? Session::get('cart'): null;
       //インスタンスを生成
       $cart = new Cart($oldCart);
        
       //Cart.phpの関数を使用
       $cart->removeItem($id);
        
       //cartのitemが０より多いなら、
       if(count($cart->cart_items)>0){
        //sessionに保存
         Session::put('cart', $cart);
       }else{
        //そうでないなら指定のsessionを破棄
         Session::forget('cart');
       }
 
       return redirect()->route('cart.index');
     }
     
     //会計画面に遷移
     public function getCheckout(){
        //指定のsession変数がない場合、viewを返す
        if(!Session::has('cart')){
            return view('cart.index');
        }
        $user = \Auth::user();

        //指定のsession変数を変数に代入する
        $oldCart = Session::get('cart');
        //インスタンスを生成
        $cart = new Cart($oldCart);
        //インスタンスの合計金額を変数に代入
        $total = $cart->totalPrice;
        
        return view('cart.checkout', [
          'user' => $user,
          'total' => $total
          ]);
    }
    
    //注文・決済
    public function pay(Request $request){
        //指定のsession変数がない場合、viewを返す
        if(!Session::has('cart')){
            return view('cart.index');
        }
        //指定のsession変数を変数に代入する
        $oldCart = Session::get('cart');
        //インスタンスを生成
        $cart = new Cart($oldCart);
        $user = \Auth::user();

        //インスタンスを生成
        $order = new Order();
        //指定の値をインスタンスに代入
        $order->name = $user->name;
        $order->total = $cart->totalPrice;
        //userインスタンスが送付先郵便番号を持つなら、注文情報にuserの送付先郵便番号と送付先住所を登録
        if($user -> destination_postal_code){
          $order->destination_postal_code = $user->destination_postal_code;
          $order->destination = $user->destination_1.$user->destination_2.$user->destination_3;
        }else{
          //userインスタンスが送付先郵便番号を持たないなら、userの郵便番号と住所登録
          $order->destination_postal_code = $user->postal_code;
          $order->destination = $user->address_1.$user->address_2.$user->address_3;
        }
        //インスタンスを保存
        Auth::user()->orders()->save($order);
        
        //注文の詳細情報を保存を数の分繰り返す
        foreach ((array)$cart->cart_items as $cart_items) {
                //注文の詳細情報に関わるインスタンスを生成
                $orders_details = new OrdersDetail();
                //指定の値をインスタンスに代入
                $orders_details->order_id = $order->id; 
                $orders_details->item_id = $cart_items['item']['id'];
                $orders_details->item_name = $cart_items['item']['item_name'];
                $orders_details->price = $cart_items['price'];
                $orders_details->amount = $cart_items['qty'];
                $orders_details->image_path = $cart_items['item']['image_path'];        
                //インスタンスに保存
                $orders_details->save();
        }
        //指定のsessionを破棄
        Session::forget('cart');

        //シークレットキーを読み込み
        Stripe::setApiKey(env('STRIPE_SECRET'));  
        //金額と円とトークンを作成
        $charge = Charge::create(array(
            'amount' => $order->total,
            'currency' => 'jpy',
            'source'=> request()->stripeToken,
        ));

        //メール送付機能
        //ログインしているuserのidを変数に代入
        $id = Auth::id();
        //orderテーブルからuser_idとidが一致する最新のレコードを一つ取得
        $order = Order::where('user_id', '=', $id)->latest()->first();
        
        // 二重送信防止のためトークンを発行
       $request->session()->regenerateToken();
        
        //購入者へ送付
        \Mail::send(new OrderMail([
          'to'          => $user->email,              //送付先メールアドレス
          'to_name'     => $order->name,              //宛先名
          'from'        => 'hakkutsu.mrs@gmail.com',  //送付元メールアドレス
          'from_name'   => 'HAKKUTSU',                //送付者表示名
          'subject'     => '注文受付完了のお知らせ',      //メールの件名
          'created_at'  => $order->created_at,        //注文時刻
          'total'       => $order->total,             //注文金額
          'destination_postal_code' => $order->destination_postal_code, //送付先郵便番号
          'destination' => $order->destination,       //送付先住所
      ],'to'));

        //フラッシュメッセージを登録
        session()->flash('flash_message', '決済が完了しました');

        return redirect()->route('cart.index');
      }

}

