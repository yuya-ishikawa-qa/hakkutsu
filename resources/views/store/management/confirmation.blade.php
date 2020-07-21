@extends('layouts.app')

@section('content')

<div class="p-3 mb-2 bg-warning text-dark">出店依頼はこちら</div>
<br>

店舗コード：（店のID表示）<br>
（店舗画像表示）<br>
（店舗説明表示）<br>
店名：（店名表示）<br>
所在地：（所在地表示）<br>
電話番号：(電話番号表示)<br>
メールアドレス：(メールアドレス表示)<br>
営業時間（営業時間表示）<br>
<br>

（商品画像表示）<br>
 (商品名表示)<br>
（価格表示）<br>
（商品説明表示）<br>
<br>

<div class="d-flex">

    <a href="/store/management/createstore" >
        <button type="submit" class="btn btn-warning col-md-6">
        戻る
        </button>
    </a>


    <br>
    <br>

    <a href="/store/management/request" >
        <button type="submit" class="btn btn-warning col-md-6">
        申請する
        </button>
    </a>    

</div>

@endsection