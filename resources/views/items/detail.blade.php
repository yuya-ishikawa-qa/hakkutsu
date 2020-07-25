@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">

    <!-- Page Content-->
      <div class="row">
        <!-- Poduct Gallery-->
        <div class="col-md-6">
          <div class="product-gallery">
            <div class="gallery-wrapper">
              <img src="{{asset('storage/images/'.$item->image_path)}}" alt="" class="img-fluid">
            </div>
            <div class="product-carousel owl-carousel gallery-wrapper d-flex mt-4">
              <div class="gallery-item mr-2" data-hash="three">
                <img src="{{asset('storage/images/'.$item->image_path)}}" alt="" class="img-fluid">
                </>
              </div>
              <div class="gallery-item mx-2" data-hash="three">
                <img src="{{asset('storage/images/'.$item->image_path)}}" alt="" class="img-fluid">
                </>
              </div>
              <div class="gallery-item mx-2" data-hash="three">
                <img src="{{asset('storage/images/'.$item->image_path)}}" alt="" class="img-fluid">
                </>
              </div>
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
          <div class="row mt-5">
            <div class="col-md-3">
              <div class="form-group">
                <label for="quantity">数量</label>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="sp-buttons col-md-9 mt-4">
              <a href="">
                <button class="btn btn-primary">カートに入れる</button>
              </a>
            </div>
          </div>
          <div class="row mt-5">
              <div class="col-md-4 mt-4 text-center">
                <a href="{{route('reviews.create')}}">
                  <button class="btn btn-secondary">商品レビューを投稿</button>
                </a>
              </div>
              <div class="col-md-4 mt-4 text-center">
                <a href="{{route('reviews.index')}}">
                  <button class="btn btn-secondary">商品レビューを見る</button>
                </a>
              </div>
              <div class="col-md-4 mt-4 text-center">
                <a href="{{route('items.index')}}">
                  <button class="btn btn-secondary">商品一覧に戻る</button>
                </a>
              </div>
          </div>
        </div>
      </div>

      <!-- 商品の新着 -->
      <h3 class="my-5">おすすめのHakkutsuアイテムはこちら</h3>

      <div class="row">
        @foreach ($newItemInformation as $item)
        <div class="col-md-3 col-sm-6 mb-4">
        <a href="{{$item->id}}">
            <img class="img-fluid" src="{{asset('storage/images/'.$item->image_path)}}" alt="item">
          </a>
        </div>
        @endforeach

      </div>
      <!-- /.row -->

    </div>
  </div>


  @endsection
