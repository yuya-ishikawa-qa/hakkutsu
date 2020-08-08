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

                            {!! Form::open(['route' => 'signup']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'お名前') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '発掘 太郎']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('name_kana', 'お名前（フリガナ）') !!}
                                {!! Form::text('name_kana', old('name_kana'), ['class' => 'form-control', 'placeholder' => 'ハックツ タロウ']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('postal_code', '郵便番号') !!}
                                {!! Form::text('postal_code', old('postal_code'), ['class' => 'form-control', 'placeholder' => '例）123-4567']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address_1', '住所１') !!}
                                {!! Form::text('address_1', old('address_1'), ['class' => 'form-control', 'placeholder' => '都道府県名を入力']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address_2', '住所２') !!}
                                {!! Form::text('address_2', old('address_2'), ['class' => 'form-control', 'placeholder' => '市町村名を入力']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('address_3', '住所３') !!}
                                {!! Form::text('address_3', old('address_3'), ['class' => 'form-control', 'placeholder' => '番地・マンション名・号室を入力']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('tel', '電話番号') !!}
                                {!! Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '例）090-1234-5678']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'メールアドレス') !!}
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '例）sample@sample.com']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email_confirmation', 'メールアドレス（確認）') !!}
                                {!! Form::email('email_confirmation', old('email_confirmation'), ['class' => 'form-control', 'placeholder' => '再度入力してください']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('password', 'パスワード') !!}
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '半角英数字６文字以上で入力']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '再度入力してください']) !!}
                            </div>


                            {!! Form::submit('登録する', ['class' => 'btn btn-info mt-5 p-3 btn-lg btn-block']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection