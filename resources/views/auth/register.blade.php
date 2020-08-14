@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="p-3 mb-2 bg-warning text-dark text-center">会員登録</h3>
            <div class="card">
                <div class="card-body">

                    @csrf

                    <div class="row mt-5 mb-5">
                        <div class="col-sm-6 offset-sm-3">

                            {!! Form::open(['route' => 'signup.confirm', 'method' => 'post']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'お名前') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '例）発掘 太郎']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('name_kana', 'お名前（フリガナ）') !!}
                                {!! Form::text('name_kana', old('name_kana'), ['class' => 'form-control', 'placeholder' => '例）ハックツ タロウ']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('postal_code', '郵便番号') !!}
                                {!! Form::text('postal_code', old('postal_code'), ['class' => 'form-control', 'placeholder' => '例）1234567 ハイフンなし']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address_1', '住所１') !!}
                                {!! Form::text('address_1', old('address_1'), ['class' => 'form-control', 'placeholder' => '都道府県']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address_2', '住所２') !!}
                                {!! Form::text('address_2', old('address_2'), ['class' => 'form-control', 'placeholder' => '市区町村、番地など']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address_3', '住所３') !!}
                                {!! Form::text('address_3', old('address_3'), ['class' => 'form-control', 'placeholder' => 'マンション名・号室など']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('tel', '電話番号') !!}
                                {!! Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '例）09012345678 ハイフンなし']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'メールアドレス') !!}
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '例）hakkutsu@example.com']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email_confirmation', 'メールアドレス（確認）') !!}
                                {!! Form::email('email_confirmation', old('email_confirmation'), ['class' => 'form-control', 'placeholder' => '再度入力してください']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('password', 'パスワード') !!}
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '例）hakkutsu1234']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '再度入力してください']) !!}
                            </div>


                            {!! Form::submit('確認する', ['class' => 'btn btn-info mt-5 p-3 btn-lg btn-block']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection