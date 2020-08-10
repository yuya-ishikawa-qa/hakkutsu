@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h3 class="p-3 mb-2 bg-warning text-dark text-center">会員登録</h3>
      <div class="card">
        <div class="card-body">

          @csrf

          <div class="p-3 mb-2 bg-warning text-dark text-center">
            <p class="pl-2">この内容でよろしければ<br>「登録する」ボタンを押してください。</p>
          </div>

          <div class="row mt-5 mb-5">
            <div class="col-sm-6 offset-sm-3">
              {!! Form::open(['route' => 'signup.post', 'method' => 'post']) !!}
              <div class="form-group">
                {!! Form::label('name', '【お名前】：' . $data['name']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('name_kana', '【フリガナ】：' . $data['name_kana']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('postal_code', '【郵便番号】：' . $data['postal_code']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('address_1', '【住所 1】：' . $data['address_1']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('address_2', '【住所 2】：' . $data['address_2']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('address_3', '【住所 3】：' . $data['address_3']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('tel', '【電話番号】：' . $data['tel']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('email', '【メールアドレス】：' . $data['email']) !!}
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