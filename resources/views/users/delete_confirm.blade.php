@extends('layouts.app')

@section('content')

<section class="title">
  <div class="container">
    <h1 class="font-weight-bold m-5">退会手続き</h1>
  </div>
</section>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item active" aria-current="page"><a href="" class="nav-link text-secondary">Home ＞ マイページ ＞ 退会手続き</a></li>
  </ol>
</nav>



<section class="member-information">
  <div class="container">
  <h4 class="message m-5">退会手続きを実行しますか？</h4>
    <div class="col-md-2 col-md-offset-5">
        {!! Form::open(['route' => ['users.destroy', Auth::user()->id], 'method' => 'delete']) !!}
            {!! Form::submit('退会する', ['class' => 'btn btn-danger btn-block']) !!}
        {!! Form::close() !!}
    </div>
    <div class="col-md-2 col-md-offset-5 spacer">
        {!! link_to_route('users.index', '退会しない', ['id' => Auth::user()->id], ['class' => 'btn btn-primary btn-block']) !!}
    </div>
  </div>
</section>


@endsection