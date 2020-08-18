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
                            @if (count($errors) > 0)
                            @foreach ($errors->get('name') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('name_kana', 'フリガナ') !!}
                                {!! Form::text('name_kana', old('name_kana'), ['class' => 'form-control', 'placeholder' => '例）ハックツ タロウ']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('name_kana') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('postal_code', '郵便番号') !!}
                                {!! Form::text('postal_code', old('postal_code'), ['class' => 'form-control', 'placeholder' => '例）1234567 ハイフンなし']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('postal_code') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('address_1', '住所１') !!}
                                {!! Form::text('address_1', old('address_1'), ['class' => 'form-control', 'placeholder' => '都道府県']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('address_1') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('address_2', '住所２') !!}
                                {!! Form::text('address_2', old('address_2'), ['class' => 'form-control', 'placeholder' => '市区町村']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('address_2') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('address_3', '住所３') !!}
                                {!! Form::text('address_3', old('address_3'), ['class' => 'form-control', 'placeholder' => '番地・マンション名・号室など']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('address_3') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('tel', '電話番号') !!}
                                {!! Form::text('tel', old('tel'), ['class' => 'form-control', 'placeholder' => '例）09012345678 ハイフンなし']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('tel') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('email', 'メールアドレス') !!}
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '例）hakkutsu@example.com']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('email') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('email_confirmation', 'メールアドレス（確認）') !!}
                                {!! Form::email('email_confirmation', old('email_confirmation'), ['class' => 'form-control', 'placeholder' => '再度入力してください']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('email_confirmation') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('password', 'パスワード') !!}
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '半角英数字６文字以上']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('password') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '再度入力してください']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('password_confirmation') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif


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