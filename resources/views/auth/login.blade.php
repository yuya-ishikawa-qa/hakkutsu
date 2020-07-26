@extends('layouts.app')

@section('content')



    <div class="text-center">
        <h3 class="login_title text-left d-inline-block mt-5">ログイン</h3>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>


                <div class="login_button m-5">
                    {!! Form::submit('ログイン', ['class' => 'btn btn-info mt-5 p-3 btn-lg btn-block']) !!}
                    {!! Form::close() !!}
                </div>

        </div>
    </div>

@endsection