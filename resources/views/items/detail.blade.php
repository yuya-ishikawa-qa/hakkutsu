@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('items/{id}'))


<div class="container">
  @if(Session::has('flash_message'))
  <div class="alert alert-success">
    {{ session('flash_message') }}
  </div>
  @endif
  <div class="row">

    <!-- Page Content-->
    <div class="row">
      <!-- Poduct Gallery-->
      <div class="col-md-6">
        <div class="product-gallery">
          <div class="gallery-wrapper">
            <img src="{{asset($item->image_path)}}" alt="" class="img-fluid item-primary-display">
          </div>
        </div>
      </div>
      <!-- Product Info-->
      <div class="col-md-6">
        <span class="text-muted">商品コード：{{$item->id}}</span>
        <h3 class="mt-3 text-normal">商品名:{{$item->item_name}}</h3>
        <h3 class="mt-3 text-normal">価格：{{$item->price}}</h3>
        <p class="my-3">
          @if(isset($item->description))
          {{$item->description}}
          @endif
        </p>
        <div class="clearfix">
          <a href="{{route('cart.addToCart',['id'=>$item->id])}}" class="btn btn-success pull-right" role="button">カートに入れる</a>
        </div>
      </div>
      <div class="col-md-12 d-flex mt-5">
        <div class="col-md-4 col-sm-12 mt-4 text-center">
          <a href="{{ route('reviews.create', ['item_id' => $item->id ]) }}" class="btn btn-outline-secondary w-75">
            商品レビューを投稿
          </a>
        </div>
        <div class="col-md-4  col-sm-12 mt-4 text-center">
          <a href="{{route('reviews.index')}}" class="btn btn-outline-secondary w-75">
            商品レビュー一覧を見る
          </a>
        </div>
        <div class="col-md-4  col-sm-12 mt-4 text-center">
          <a href="{{route('items.index')}}" class="btn btn-outline-secondary w-75">
            商品一覧に戻る
          </a>
        </div>
      </div>
    </div>

    <!-- 商品の新着 -->
    <h3 class="my-5 ml-3">おすすめのHakkutsuアイテムはこちら</h3>

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

  </div>
</div>



@endsection