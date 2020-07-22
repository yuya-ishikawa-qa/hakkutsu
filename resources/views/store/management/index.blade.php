@extends('layouts.app')

@section('content')

<br><br>

<div class="p-3 mb-2 bg-warning text-dark">店舗情報
・商品情報</div>
<br>
<h1>店舗情報</h1>
<p>【店名】:{{$store->store_name}}</p>
<p>【店舗郵便番号】:{{$store->postal}}</p>
<p>【所在地】:{{$store->address}}</p>
<p>【電話番号】:{{$store->tel}}</p>
<p>【メールアドレス】:{{$store->mail}}</p>
<p>【店舗イメージ】：<img src="/{{$store->path}}" width="200px"></p>
<p>【営業時間】:{{$store->business_hours}}</p>
<p>【店舗の説明】:{{$store->description}}</p>
<p>===========================================</p>
<削除><商品画像><商品名><価格><br>
<a href="/store/management/index" >
        削除
</a>
（商品画像表示）
 (商品名表示)
（価格表示）<br>
(商品説明表示)
<br><br>

<div class="d-flex">

    <a href="/store/management/create" >
        <button type="submit" class="btn btn-warning col-md-6">
        店舗情報の編集
        </button>
    </a>


    <br>
    <br>

    <a href="/store/management/createitem" >
        <button type="submit" class="btn btn-warning col-md-6">
        商品を追加する
        </button>
    </a>    


    

</div>

@endsection