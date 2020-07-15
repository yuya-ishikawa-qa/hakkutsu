@extends('layouts.app')

@section('content')


    <div class="text-center">
        <h1><i class="fas fa-store"></i>商品登録</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open([]) !!}
                <div class="form-group">
                    {!! Form::label('name', '【商品名】') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('price', '【価格】') !!}
                    {!! Form::text('price', old('price'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category_id', '【カテゴリー】') !!}
                    {!! Form::text('category_id', old('category_id'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('image', '【商品画像】') !!}
                    {!! Form::text('image', old('image'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel', '【電話番号】') !!}
                    {!! Form::text('tel', old('tel'), ['class' => 'form-control']) !!}
                </div>
               
                <div class="form-group">
                    {!! Form::label('description', '【商品の説明】') !!}
                    {!! Form::textarea('description', old('description'),  ['rows' => 5,'cols' => 60]) !!}
                </div>
                {!! Form::submit('送信する', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            <a href="/store/management/index" >
                送信する（作業用）
            </a>
        </div>
    </div>

  
@endsection('content')

