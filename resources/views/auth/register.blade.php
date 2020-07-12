@extends('layouts.app')

@section('content')


<div class="text-center">
  <h3 class="login_title text-left d-inline-block mt-5">お客様情報の入力</h3>
</div>

<div class="row mt-5 mb-5">
  <div class="col-sm-6 offset-sm-3">

    {!! Form::open(['route' => 'signup.post']) !!}
    <div class="form-group">
      {!! Form::label('name', 'お名前') !!}
      {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('name_kana', 'お名前（フリガナ）') !!}
      {!! Form::text('name_kana', old('name_kana'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('address', '住所') !!}
      {!! Form::text('address', old('address'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('phone_number', '電話番号') !!}
      {!! Form::text('phone_number', old('phone_number'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'メールアドレス') !!}
      {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email_confirmation', 'メールアドレス（確認）') !!}
      {!! Form::email('email_confirmation', old('email_confirmation'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'パスワード') !!}
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
      {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="signup_button m-5">
      {!! Form::submit('新規登録', ['class' => 'btn btn-info mt-5 p-3 btn-lg btn-block']) !!}
      {!! Form::close() !!}
    </div>

  </div>
</div>

@endsection