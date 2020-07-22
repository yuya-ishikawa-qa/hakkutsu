@extends('layouts.app')

@section('content')


    
<div class="text-right">

{{ Auth::user()->name }}
</div>

    <div class="text-center">
        <h1><i class="fas fa-store"></i>店舗登録</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['url' => 'stores/management/confirmation', 'method' => 'post','enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label('store_name', '【店名】') !!}
                    {!! Form::text('store_name', old('store_name'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('postal', '【店舗郵便番号】') !!}
                    {!! Form::text('postal', old('postal'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', '【所在地】') !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('tel', '【電話番号】') !!}
                    {!! Form::text('tel', old('tel'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('mail', '【メールアドレス】') !!}
                    {!! Form::text('mail', old('mail'), ['class' => 'form-control']) !!}
                </div>
                <div class='form-group'>
                    {!! Form::label('path','【店舗イメージ】') !!}
                    {!! Form::file('path') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('business_hours', '【営業時間】') !!}
                    {!! Form::text('business_hours', old('business_hours'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', '【店舗の説明】') !!}
                    {!! Form::textarea('description', old('description'),  ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('内容を確認する', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection('content')



