@extends('layouts.app')

@section('content')

<section class="title">
  <div class="container">
    <h1 class="font-weight-bold m-5">マイページ</h1>
  </div>
</section>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-transparent">
    <li class="breadcrumb-item active" aria-current="page"><a href="" class="nav-link text-secondary">Home ＞ マイページ</a></li>
  </ol>
</nav>



<section class="member-information">
  <div class="container">
    <ul class="member-side">
      <a href="">
        <li class="button-hover">
          {!! link_to_route('store.request', '出店依頼はこちら') !!}
        </li>
        <li class="button-hover">
          {!! link_to_route('signup', '会員登録内容の変更') !!}
        </li>
        <li class="button-hover">
          {!! link_to_route('mypage.destroy', '退会手続き') !!}
        </li>
      </a>
    </ul>
  </div>
</section>


<section class="sub-title">
  <div class="container">
    <h3 class="content-text m-5">購入履歴一覧</h3>
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