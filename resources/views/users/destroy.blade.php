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
    <ul class="member-side">
      <a href="">
        <li class="delete-account">
          退会します
        </li>
      </a>
      <a href="/">
        <li class="continue">
          退会しません
        </li>
      </a>
    </ul>
  </div>
</section>


@endsection