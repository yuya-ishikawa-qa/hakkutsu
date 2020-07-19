@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Shop Toolbar-->
  　<div class="row justify-content-between">
        <div class="mb-2 ml-4 shop-sorting">
          <label >並び替え</label>
          <select class="form-control">
            <option>価格順</option>
            <option>新着順</option>
            <option>人気順</option>
          </select>
        </div>
        <!-- Pagination-->
        <div class="pagination">
          <ul class="pages">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <a class="btn btn-outline-secondary btn-sm" href="#">次へ<i class="icon-arrow-right"></i></a>
          </ul>　
        </div>
  </div>

    <!-- Page Content-->

    <div class="card-deck row">
      @foreach($stores as $key => $store)
      @if($loop->iteration % 3 == 1 && $loop->iteration !=1)
        </div>
        <div class="card-deck row mt-3">
      @endif
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="{{asset('storage/images/'.$store->image_path)}}" alt="">
              <div class="card-body">
                <h4 class="card-title">お店の名前：{{$store->store_name}}</h4>
              <p class="card-text">
                @if(isset($store->description))
                  {{$store->description}}
                @endif
              </p>
              </div>
              <div class="card-footer bg-white">
                <a href="">
                  <button class="btn btn-secondary">お店の詳細</button>
                </a>
              </div>
            </div>
          </div>
      @endforeach

      <!-- Pagination-->
      <nav class="pagination">
              <div class="column">
                <ul class="pages">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li>...</li>
                  <li><a href="#">12</a></li>
                  <a class="btn btn-outline-secondary btn-sm" href="#">次へ<i class="icon-arrow-right"></i></a>
                </ul>
              </div>
      </nav>

    </div>
  </div>



@endsection
