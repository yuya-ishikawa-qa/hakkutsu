<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Item;
use Session;
use App\Cart;

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

}
