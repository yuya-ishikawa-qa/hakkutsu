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
          {!! link_to_route('users.orderList', '注文履歴') !!}
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



<!-- 商品の新着 -->
<h3 class="my-5">おすすめのHakkutsuアイテムはこちら</h3>

<div class="row">
  @foreach ($newItemInformation as $item)
  <div class="col-md-3 col-sm-6 mb-4">
    <a href="{{$item->id}}">
      <img class="img-fluid item-four-display" src="{{asset($item->image_path)}}" alt="item">
    </a>
  </div>
  @endforeach
</div>
<!-- /.row -->



@endsection