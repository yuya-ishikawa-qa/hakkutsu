@extends('layouts.app')

@section('content')

      <div class="container">
        <div class="row">

          <h3 class="my-4">店舗コード：
            <small>*****</small>
          </h3>

          <div class="row">

            <div class="col-md-8">
              <img class="img-fluid" src="{{asset('storage/images/'.$store->image_path)}}" alt="">
            </div>

            <div class="col-md-4">
              <h3 class="my-3">店名：{{$store->store_name}}</h3>
              <h3 class="my-3">所在地：{{$store->address}}</h3>
              <h3 class="my-3">電話番号：{{$store->tel}}</h3>
              <h3 class="my-3">メールアドレス：{{$store->mail}}</h3>
              <h3 class="my-3">営業時間：{{$store->business_hours}}</h3>
            </div>

          </div>

          <div class="row my-5">
            <div class="col-md-6">
              <h3>店舗概要</h3>
              <p>{{$store->description}}</p>
            </div>
            <div class="col-md-6 mt-5">
              <a class="btn btn-primary w-100" href="{{ route('stores.index')}}">商品一覧はこちら</a>
            </div>
          </div>

          <!-- 商品の新着 -->
          <h3 class="my-5">商品の新着</h3>

          <div class="row">

            <div class="col-md-3 col-sm-6 mb-4">
              <img class="img-fluid" src="https://picsum.photos/500/300" alt="">
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
              <a href="#">
                <img class="img-fluid" src="https://picsum.photos/500/300" alt="">
              </a>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
              <a href="#">
                <img class="img-fluid" src="https://picsum.photos/500/300" alt="">
              </a>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
              <a href="#">
                <img class="img-fluid" src="https://picsum.photos/500/300" alt="">
              </a>
            </div>

          </div>

        </div>
      </div>


@endsection
