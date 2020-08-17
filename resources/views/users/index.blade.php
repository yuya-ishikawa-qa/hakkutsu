@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('users'))

{{-- フラッシュ・メッセージ --}}
@if (session('my_status'))
<div class="container mt-2">
  <div class="alert alert-success">
    {{ session('my_status') }}
  </div>
</div>
@endif

<section class="title my-5">
  <div class="container">
    <h3 class="p-3 mb-2 bg-warning text-dark text-center">マイページ</h3>
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
    <ul class="member-side">
      <a href="">
        <li class="button-hover">
          {!! link_to_route('store.request', '出店依頼はこちら') !!}
        </li>
        <li class="button-hover">
          {!! link_to_route('users.edit', '会員登録内容の変更') !!}
        </li>
        <li class="button-hover">
          {!! link_to_route('users.delete_confirm', '退会手続き') !!}
        </li>
      </a>
    </ul>
  </div>
</section>


<section class="sub-title">
  <div class="container">
    <h3 class="content-text m-5">おすすめのHakkutsuアイテムはこちら</h3>
  </div>
</section>



<section class="purchase-history m-5">
  <div class="container">
    <div class="d-flex">
      <a href="">
        <img class="d-block w-75" src="{{ asset('image/food_img.jpg') }}">
      </a>
      <a href="">
        <img class="d-block w-75" src="{{ asset('image/food_img.jpg') }}">
      </a>
      <a href="">
        <img class="d-block w-75" src="{{ asset('image/food_img.jpg') }}">
      </a>
      <a href="">
        <img class="d-block w-75" src="{{ asset('image/food_img.jpg') }}">
      </a>
    </div>
  </div>
</section>



@endsection
