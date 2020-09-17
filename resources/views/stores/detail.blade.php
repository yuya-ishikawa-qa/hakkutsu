@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('stores/{id}'))

      <div class="container">

        <div class="row">

          <h3 class="my-4">店舗コード：
            <small>{{$store->id}}</small>
          </h3>

          <div class="row">

            <div class="col-md-7">
              <img class="img-fluid" src="{{asset(Storage::disk('s3')->url($store->image_path))}}" alt="">
            </div>

            <div class="col-md-5">
              <h3 class="my-3">店名：{{$store->store_name}}</h3>
              <h3 class="my-3">所在地：{{$store->address}}</h3>
              <h3 class="my-3">電話番号：{{$store->tel}}</h3>
              <h3 class="my-3">メールアドレス：{{$store->mail}}</h3>
            </div>

          </div>

          <div class="row my-5">
            <div class="col-md-6">
              <h3>店舗概要</h3>
              <p>{{$store->description}}</p>
            </div>
            <div class="col-md-6 mt-5">
              <a class="btn btn-outline-success w-100" href="{{ route('items.index')}}">商品一覧はこちら</a>
              <a class="btn btn-outline-primary w-100 mt-3" href="{{ route('stores.index')}}">店舗一覧はこちら</a>
            </div>
          </div>

          <!-- 商品の新着 -->
          <h3 class="my-5">{{$store->store_name}}の新着商品</h3>

          <div class="row">

            @foreach ($newItemInformation as $item)
              <div class="col-md-3 col-sm-6 mb-4">
                <a href="/items/{{$item->id}}">
                  <img class="img-fluid item-four-display" src="{{asset($item->image_path)}}" alt="">
                </a>
              </div>
              @endforeach
          </div>

        </div>
      </div>


@endsection
