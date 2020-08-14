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

              {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

              <div class="form-group">
                {!! Form::label('name', 'お名前') !!}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                {!! Form::label('name_kana', 'お名前(フリガナ)') !!}
                {{ Form::text('name_kana', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                {!! Form::label('postal_code', '郵便番号') !!}
                {{ Form::text('postal_code', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                {!! Form::label('address_1', '住所１') !!}
                {{ Form::text('address_1', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                {!! Form::label('address_2', '住所２') !!}
                {{ Form::text('address_2', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                {!! Form::label('address_3', '住所３') !!}
                {{ Form::text('address_3', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                {!! Form::label('tel', '電話番号') !!}
                {{ Form::text('tel', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {{ Form::text('email', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                <label for="password">パスワード</label>
                <input id="password" type="hidden" name="password" class="form-control" value="{{ $user->password }}">
                <input id="password" type="password" name="password" class="form-control" value="{{ $user->password }}" disabled>
              </div>


              {!! Form::submit('修正する', ['class' => 'btn btn-secondary mt-5 p-3 btn-lg btn-block']) !!}
              {!! Form::close() !!}


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection