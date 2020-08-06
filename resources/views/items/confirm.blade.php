@extends('layouts.app')

@section('content')


<div class="p-3 mb-2 bg-warning text-dark">出店依頼はこちら</div>
<br>

<div class="text-right">
ユーザー名:{{ Auth::user()->name }}<br>
店名:{{ $data["store"]->store_name}}
</div>

<div class="container">
    <div class = "row justify-content-center">
        <div class = "col-12 col-sm-8">
                <p class = "pl-2">この内容でよろしければ「送信する」ボタンを押してください。</p>
            {!! Form::open(['route' => 'items.store', 'method' => 'post']) !!}    
            <div class = "form-group">
                    {!! Form::label('item_name', '【商品名】: '. $post_data["item_name"]) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('status', '【販売状況】:'. $post_data["status"]) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('stock', '【在庫】:'. $post_data["stock"]) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('price', '【販売価格（税込）】: '. $post_data["price"]) !!}円
                </div>
                <div class = "form-group">
                     <p>【商品画像】：<img src = "/{{ $data['read_temp_path'] }}" width="450px"></p>
                </div>
                <div class="form-group">
                    {!! Form::label('description', '【商品の説明文】: '. $post_data["description"]) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('tax_id', '【消費税率】: '. $post_data["tax_id"]) !!}
                </div>
               </div>            
               <!-- $data[$post_data["tax_id"],tax_rate]$post_data["tax_id"] -->
        <div class = "container">
                <div class="row  justify-content-center">
                    <div class = "col-sm-6 mt-3">
                        {!! Form::submit('送信する', ['name' => 'action', 'class' => 'btn btn-warning btn-block']) !!}
                    </div>
                </div>
    {!! Form::close() !!}
    <a href="/stores/create" >
        <div class="row  justify-content-center">
            <div class="col-sm-6 mt-3">
                <button type="submit" class="btn btn-secondary btn-block">
                    修正する
                </button>
            </div>    
        </div>
     </a>
</div>

@endsection