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
                    {!! Form::label('status', '【販売状況】') !!}</br>
                    <!-- {!! Form::text('status', old('status'), ['class' => 'form-control']) !!} -->
                    {!! Form::select('status', ['販売中' => '販売中', '商品入荷待ち' => '商品入荷待ち', '販売休止中' => '販売休止中'], old('category'), ['placeholder' => '選択してください']) !!}
                    <!-- {!! Form::select('status', ['販売中', '商品入荷待ち', '販売休止中'], old('category'), ['placeholder' => '選択してください']) !!} -->
                    <!-- {!! Form::select('status', ['販売中', '商品入荷待ち', '販売休止中'], null,['class' => 'form-control']) !!} -->
                </div>
                                <!-- <div class = "form-group">
                    <label class="col-md-4 control-label">分類</label>             
                    <div class="col-md-6">
                        {!! Form::select('category', ['犬', '猫', '猿'], null, ['class' => 'form-control']) !!}
                        {!! Form::select('category', ['1' => '犬', '2' => '猫', '3' => '猿'], old('category'), ['placeholder' => '選択してください']) !!}
                        {!! Form::select('category', ['犬', '猫', '猿'], old('category'),['placeholder' => '選択してください'], ['class' => 'form-control']) !!}
                    </div>
                </div> -->
                <div class = "form-group">
                    {!! Form::label('stock', '【販売在庫数】') !!}</br>
                    {!! Form::selectRange('stock', 1, 999,old('stock'), ['placeholder' => '選択してください']) !!}
                    <!-- {!! Form::text('stock', old('stock'), ['class' => 'form-control']) !!} -->
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
                <!-- <div class = "form-group">
                    {!! Form::label('tax_id', '【消費税率】') !!}
                    {!! Form::text('tax_id', old('tax_id'), ['class' => 'form-control']) !!}
                </div> -->
                <div class = "form-group">
                    {!! Form::label('tax_id', '【消費税率】') !!}</br>
                    <!-- {!! Form::text('status', old('status'), ['class' => 'form-control']) !!} -->
                    {!! Form::select('tax_id', ['1' => '8%', '2' => '10%'], old('tax_id'), ['placeholder' => '選択してください']) !!}
                    <!-- {!! Form::select('status', ['販売中', '商品入荷待ち', '販売休止中'], old('category'), ['placeholder' => '選択してください']) !!} -->
                    <!-- {!! Form::select('status', ['販売中', '商品入荷待ち', '販売休止中'], null,['class' => 'form-control']) !!} -->
                </div>
                {!! Form::submit('内容を確認する', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection('content')