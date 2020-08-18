@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="p-3 mb-2 bg-warning text-dark text-center">ログイン</h3>
            <div class="card">
                <div class="card-body">

                    @csrf

                    <div class="row mt-5 mb-5">
                        <div class="col-sm-6 offset-sm-3">
                            {!! Form::open(['route' => 'login']) !!}


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
                                {!! Form::label('password', 'パスワード') !!}
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '半角英数字６文字以上']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('password') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('記憶する') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            {!! Form::submit('ログイン', ['class' => 'btn btn-info mt-5 p-3 btn-lg btn-block']) !!}
                            {!! Form::close() !!}

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('パスワードをお忘れですか？') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection