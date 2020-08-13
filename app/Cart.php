<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $cart_items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        //oldCartを用いてインスタンスが生成されたなら
    	if($oldCart){
            //新しいインスタンスにそれぞれ代入する
    		$this->cart_items =$oldCart->cart_items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function add($item, $id){
        //配列を変数に代入
    	$storedItem =['qty' => 0, 'price' =>$item->price, 'item'=>$item];

    	if($this->cart_items){
        //idがcart_itemに存在する場合、
    		if(array_key_exists($id,$this->cart_items)){
                //元々のcart_itemsを変数に代入する
    			$storedItem =$this->cart_items[$id];
    		}
        }
        
        //量を１足す
        $storedItem['qty']++;
        //取得するitemの金額と$storedItemの量を掛け、変数に代入する
    	$storedItem['price'] = $item->price * $storedItem['qty'];    	
        //保存するItemの情報をインスタンスに代入する
    	$this->cart_items[$id] = $storedItem;
        //合計の数に１を足す
        $this->totalQty++;
        //取得したitemの金額を合計金額に加える
    	$this->totalPrice += $item->price;
    }

    public function increaseByOne($id){
        //1を足す
        $this->cart_items[$id]['qty']++;
        //cartの指定のitemの合計金額から、取得するitemの金額を足す
        $this->cart_items[$id]['price']+= $this->cart_items[$id]['item']['price'];
        //1を足す
        $this->totalQty++;
        //cart内の合計金額から、取得するitemの金額を足す
        $this->totalPrice+=$this->cart_items[$id]['item']['price'];

        //cartのidのitemの量が0以下なら、指定の変数を破棄する
        if($this->cart_items[$id]['qty']<=0){
            unset($this->cart_items[$id]);
        }
    }

    public function reduceByOne($id){
        //１減らす
        $this->cart_items[$id]['qty']--;
        //指定のitemの合計金額から、取得するitemの金額を減らす
        $this->cart_items[$id]['price']-= $this->cart_items[$id]['item']['price'];
        //1減らす
        $this->totalQty--;
        //cart内の合計金額から、取得するitemの金額を減らす
        $this->totalPrice-=$this->cart_items[$id]['item']['price'];

        //cartのidのitemの量が0以下なら、指定の変数を破棄する
        if($this->cart_items[$id]['qty']<=0){
            unset($this->cart_items[$id]);
        }
    }

    public function removeItem($id){
        //cartの合計の量から、cartの指定の商品の合計量を減らす
        $this->totalQty -= $this->cart_items[$id]['qty'];
        //cartの合計金額から、cartの指定の商品の合計金額を減らす
        $this->totalPrice -= $this->cart_items[$id]['price'];
        //指定の変数を破棄する
        unset($this->cart_items[$id]);
    }
}
