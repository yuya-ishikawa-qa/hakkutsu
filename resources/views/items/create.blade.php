@extends('layouts.app')

@section('content')

<div class="text-right">
ユーザー名:{{ Auth::user()->name }}<br>
店名:{{ $store->store_name}}
消費税{{$taxes[1]}}
</div>
    <div class = "text-center">
        <h1><i class = "fas fa-store"></i>商品登録</h1>
    </div>
    <div class = "row">
        <div class = "col-sm-6 offset-sm-3">
            {!! Form::open(['route' => ['items.confirm',$store], 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                <div class = "form-group">
                    {!! Form::label('item_name', '【商品名】') !!}
                    {!! Form::text('item_name', old('item_name'), ['class' => 'form-control']) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('status', '【販売状況】') !!}</br>
                    {!! Form::select('status', ['○販売中です' => '○販売中です', '△商品入荷待ちです' => '△商品入荷待ちです', '×販売休止中です' => '×販売休止中です'], old('category'), ['placeholder' => '選択してください']) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('stock', '【在庫】') !!}</br>
                    {!! Form::select('stock', ['○在庫あり' => '○在庫あり','△残り僅か' => '△残り僅か','×なし' => '×なし' ], old('category'), ['placeholder' => '選択してください']) !!}
                    <!-- {!! Form::selectRange('stock', 1, 999,old('stock'), ['placeholder' => '選択してください']) !!} -->
                </div>
                <div class = "form-group">
                    {!! Form::label('price', '【販売価格（税込）】') !!}
                    {!! Form::text('price', old('price'), ['class' => 'form-control']) !!}
                    <span>円</span>
                </div>
                <div class = 'form-group'>
                    {!! Form::label('image_path','【商品画像】') !!}
                    {!! Form::file('image_path') !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('description', '【商品の説明文】') !!}
                    {!! Form::textarea('description', old('description'),  ['class' => 'form-control']) !!}
                </div>
                <div class = "form-group">
                    {!! Form::label('tax_id', '【消費税率】') !!}</br>
                    {{ Form::select('tax_id', $taxes, null, ['class' => 'form', 'id' => 'tax_id', 'placeholder' => '選択してください']) }}
                    <!-- {!! Form::select('tax_id', ['1' => '8%', '2' => '10%'], old('tax_id'), ['placeholder' => '選択してください']) !!} -->
                </div>
                {!! Form::submit('内容を確認する', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection('content')