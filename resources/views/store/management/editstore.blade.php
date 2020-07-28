@extends('layouts.app')

@section('content')


    
<div class="text-right">

{{ Auth::user()->name }}
{{ $store->store_name}}
</div>

    <div class="text-center">
        <h1><i class="fas fa-store"></i>店舗編集</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => ['stores.update',$store], 'method' => 'put','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label('store_name', '【店名】') !!}
                    {!! Form::text('store_name', $store->store_name, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('postal', '【店舗郵便番号】') !!}
                    {!! Form::text('postal', $store->postal, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', '【所在地】') !!}
                    {!! Form::text('address', $store->address, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel', '【電話番号】') !!}
                    {!! Form::text('tel', $store->tel, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mail', '【メールアドレス】') !!}
                    {!! Form::text('mail', $store->mail, ['class' => 'form-control']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('image_path','【店舗イメージ】') !!}
                    <img src ="/{{$store->image_path}}" width="450px">
                    {!! Form::file('image_path') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('business_hours', '【営業時間】') !!}
                    {!! Form::text('business_hours', $store->business_hours, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', '【店舗の説明】') !!}
                    {!! Form::textarea('description', $store->description,  ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('変更する', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection('content')