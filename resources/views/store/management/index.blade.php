@extends('layouts.app')

@section('content')

<br><br>


{{$store->store_name}}	
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