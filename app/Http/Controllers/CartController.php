<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Item;
use Session;
use App\Cart;
use App\Order;

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

     public function getCheckout(){
        //指定のsession変数がない場合、viewを返す
        if(!Session::has('cart')){
            return view('cart.index');
        }
        //指定のsession変数を変数に代入する
        $oldCart = Session::get('cart');
        //インスタンスを生成
        $cart = new Cart($oldCart);
        //インスタンスの合計金額を変数に代入
        $total = $cart->totalPrice;
        
        return view('cart.delivery', ['total' => $total]);
    }

    public function postCheckout(Request $request){


        if(!Session::has('cart')){
            return redirect()->route('shop.shoppingCart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // dd($cart);

//         Stripe::setApiKey('sk_test_1XytYloBhgG4tUEvdXfU8MsP');

        try{
//            $charge = Charge::create(array(
//   "amount" => $cart->totalPrice*100,
//   "currency" => "aud",
//   //"source" => $request->input('stripeToken'), // obtained with Stripe.js
//   "source" => [
//     "number" => $request->input('card-number'),
//     "cvc" => $request->input('card-cvc'),
//     "exp_month" => $request->input('card-expiry-month'),
//     "exp_year" => $request->input('card-expiry-year')]
//   ,
//   "description" => "Test Charge"
//         ));

           $order = new Order();
           $order->cart = serialize($cart);
           $order->destination = $request->input('destination');
           
           $order->name = $request->input('name');
           
        //    $order->payment_id = $charge->id;
           
           Auth::user()->orders()->save($order);
        //    dd($order);
        }catch(\Exception $e){

            return redirect()->route('checkout')->with('error',$e->getMessage());
        }
        
        //don't want the cart in the checkout anymore
        Session::forget('cart');
          //console.log("123" +source);


        return redirect()->route('items.index')->with('success','Successfully purchased products!');
    }

    public function orderHistory()
    {
        //ログインしているuserのidを変数に代入
        $id = Auth::id();
        //上記のidよりuser情報を取得
        $user = User::findOrFail($id);
        //userのもつstoreデータをidで昇順で並べ、変数に代入
        $orders = $user->orders()->orderBy('id', 'asc')->paginate(9);
        dd($orders);

        //上記の変数を配列型式で変数に代入
        $data = [
            'user' => $user,
            'orders' => $orders,
        ];

        return view('users.orderHistory', $data);
    }

}
