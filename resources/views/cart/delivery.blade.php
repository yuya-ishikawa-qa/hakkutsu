@extends('layouts.app')

@section('content')

<div class="p-3 mb-2 bg-warning text-dark">お届け先の設定</div>
<br>

（店舗名表示）<br><br>
<選択><お届け先><変更・削除<br>
(ユーザの住所表示)
<a href="/store/management/index" >
        変更
</a>

<br><br>

<div class="d-flex">

    <a href="/cart/index" >
        <button type="submit" class="btn btn-warning col-md-6">
        前のページに戻る
        </button>
    </a>


    <br>
    <br>

    <a href="/buy/index" >
        <button type="submit" class="btn btn-warning col-md-6">
        購入手続きへ進む
        </button>
    </a>    

</div>

@endsection