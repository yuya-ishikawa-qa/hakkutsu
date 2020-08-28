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
    <div class="d-flex">
      <div class="mypage_button">
        <a href="/users/orderList" class="button-hover btn btn-warning text-dark">
          注文履歴
        </a>
      </div>
      <div class="mypage_button">
        <a href="/store/management/request" class="button-hover btn btn-warning text-dark">
          出店依頼はこちら
        </a>
      </div>
    </div>
    <div class="d-flex">
      <div class="mypage_button">
        <a href="/edit" class="button-hover btn btn-warning text-dark">
          会員登録内容の変更
        </a>
      </div>
      <div class="mypage_button">
        <a href="/delete_confirm" class="button-hover btn btn-warning text-dark">
          退会手続き
        </a>
      </div>
    </div>
  </div>
</section>


<section class="sub-title">
  <div class="container">
    <h3 class="my-5">おすすめのHakkutsuアイテムはこちら</h3>
    <div class="row">
      @foreach ($newItemInformation as $item)
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="/items/{{$item->id}}">
          <img class="img-fluid item-four-display" src="{{asset($item->image_path)}}" alt="item">
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection