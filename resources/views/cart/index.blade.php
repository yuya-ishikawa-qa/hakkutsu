@extends('layouts.app')

@section('content')

<div class="p-3 mb-2 bg-warning text-dark">カート内の商品</div>
<br>

（店舗名表示）<br><br>
<削除><商品画像><商品名><数量><小計><br>
<a href="/store/management/index" >
        削除
</a>
（商品画像表示）
 (商品名表示)
 (数量表示)
 (価格表示)
（小計表示）
<br>
消費税：(消費税表示)
合計（税込み）：（合計金額表示）
<br><br>

<div class="d-flex">

    <a href="" >
        <button type="submit" class="btn btn-warning col-md-6">
        商品一覧に戻る
        </button>
    </a>


    <br>
    <br>

    <a href="/cart/delivery" >
        <button type="submit" class="btn btn-warning col-md-6">
        購入手続きへ進む
        </button>
    </a>    

</div>

@endsection