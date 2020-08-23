@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('users/delete_confirm'))

<section class="title">
  <div class="container pt-5">
    <h3 class="p-3 mb-2 bg-warning text-dark text-center">退会手続き</h3>
    <h3 class="font-weight-bold m-5">
      @if(Auth::check())
      {{ Auth::user()->name }}
      @endif
      様
    </h3>
  </div>
</section>

<section class="member-information">
  <div class="container">
    <h3 class="message m-5 mb-5">退会手続きを実行しますか？</h3>
    <div class="d-flex justify-content-center">
      <div class="col-md-5 w-50">
        {!! link_to_route('users.index', '退会しない', ['id' => Auth::user()->id],
        ['class' => 'btn btn-secondary btn-block btn-lg p-4']) !!}
      </div>
      <div class="col-md-5 w-50">
        {!! Form::open(['route' => ['users.destroy', Auth::user()->id], 'method' => 'delete']) !!}
        {!! Form::submit('退会する', ['class' => 'btn btn-danger btn-block btn-lg p-4']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>


@endsection