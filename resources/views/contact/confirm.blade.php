@extends('layouts.app')

@section('content')

@if (count($errors) > 0)
<ul class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
    <li class="ml-4">{{ $error }}</li>
    @endforeach
</ul>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8">
            <h1>お問い合わせ内容の確認</h1>
            <p class="pl-2">この内容でよろしければ「送信する」ボタンを押してください。</p>

            {{ Form::open(['route' => 'contact.complete']) }}
            <div class="container">
                <div class="row form-group">
                    {!! Form::label('name', 'お名前 :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::text('name', $inputs['name'], ['class' => 'form-control col-sm-12','readonly']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('email', 'メールアドレス :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::email('email', $inputs['email'], ['class' => 'form-control col-sm-12','readonly']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('body', '内容 :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::textarea('body', $inputs['body'], ['class' => 'form-control col-sm-12','readonly', 'rows' => '6']) !!}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-sm-6 mt-3">
                        {!! Form::submit('送信する', ['name' => 'action', 'class' => 'btn btn-warning btn-block']) !!}
                    </div>
                </div>
                <div class="row  justify-content-center">
                    <div class="col-sm-6 mt-3">
                        {!! Form::submit('修正する', ['name' => 'action', 'class' => 'btn btn-secondary btn-block']) !!}
                    </div>
                </div>
            </div>
            {{ Form::close() }}

        </div>
    </div>
</div>
@endsection
