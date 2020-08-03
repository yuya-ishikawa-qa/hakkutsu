@extends('layouts.app')

@section('content')

<div class="text-right">
ユーザー名:{{ Auth::user()->name }}<br>
店名:{{ $store->store_name}}
</div>
    <div class = "text-center">
        <h1><i class = "fas fa-store"></i>商品登録</h1>
    </div>
    <div class = "row">
        <div class = "col-sm-6 offset-sm-3">
            {!! Form::open(['route' => ['items.confirm',$store], 'method' => 'post','enctype'=>'multipart/form-data']) !!}
            <!-- {!! Form::open(['route' => ['stores.update',$store], 'method' => 'put','enctype'=>'multipart/form-data']) !!} -->
                <div class = "form-group">
                    {!! Form::label('item_name', '【商品名】') !!}
                    {!! Form::text('item_name', old('item_name'), ['class' => 'form-control']) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('status', '【販売状況】') !!}
                    {!! Form::text('status', old('status'), ['class' => 'form-control']) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('stock', '【在庫数】') !!}
                    {!! Form::text('stock', old('stock'), ['class' => 'form-control']) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('price', '【価格】') !!}
                    {!! Form::text('price', old('price'), ['class' => 'form-control']) !!}
                </div>
                <div class = 'form-group'>
                    {!! Form::label('image_path','【商品画像】') !!}
                    {!! Form::file('image_path') !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('description', '【店舗の説明】') !!}
                    {!! Form::textarea('description', old('description'),  ['class' => 'form-control']) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('tax_id', '【消費税率】') !!}
                    {!! Form::text('tax_id', old('tax_id'), ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('内容を確認する', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection('content')