@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('users/edit'))

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h3 class="p-3 mb-2 bg-warning text-dark text-center">送付先の登録・更新</h3>
      <div class="card">
        <div class="card-body">

          @csrf

          <div class="row mt-5 mb-5">
            <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => ['users.storeDestination',$user], 'method' => 'put'])!!}

              <div class="form-group">
                {!! Form::label('destination_postal_code', '送付先郵便番号') !!}
                {{ Form::text('destination_postal_code', null, ['class' => 'form-control', 'placeholder' => '例）1234567 ハイフンなし']) }}
              </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('destination_postal_code') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif

              <div class="form-group">
                {!! Form::label('destination_1', '送付先１') !!}
                {{ Form::text('destination_1', null, ['class' => 'form-control', 'placeholder' => '都道府県']) }}
              </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('destination_1') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif

              <div class="form-group">
                {!! Form::label('destination_2', '送付先 2') !!}
                {{ Form::text('destination_2', null, ['class' => 'form-control', 'placeholder' => '市区町村']) }}
              </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('destination_2') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif

              <div class="form-group">
                {!! Form::label('destination_3', '送付先 3') !!}
                {{ Form::text('destination_3', null, ['class' => 'form-control', 'placeholder' => '番地・マンション名・号室など']) }}
              </div>
                @if (count($errors) > 0)
                @foreach ($errors->get('destination_3') as $error)
                <div class="text-danger">{{ $error }}</div>
                @endforeach
                @endif



              {!! Form::submit('更新する', ['class' => 'btn btn-secondary mt-5 p-3 btn-lg btn-block']) !!}
              {!! Form::close() !!}


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
