@extends('layouts.app')

@section('content')

<br><br>

<div class = "p-3 mb-2 bg-warning text-dark">管理店舗</div>
<div class = "text-right">
{{ Auth::user()->name }}
</div>
@if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
@endif

<div class="container">
      <!-- Shop Toolbar-->
      　<div class="row justify-content-between">
            <div class="mb-2 ml-4 shop-sorting">
              <p>総件数: {{ $stores -> total() }}件</p>
                <form action="/stores" method="get">
                    表示件数：
                    <select id="" name="disp_list" onchange="submit();">
                      <option>選択してください</option>
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                  </select>
                </form>
            </div>
              {{ $stores -> appends(request() -> input() )-> links('pagination::default') }}
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
                  <img class="card-img-top store-display" src="{{asset($store->image_path)}}" alt="">
                  <div class="card-body">
                    <h4 class="card-title">{{$store->store_name}}</h4>
                  <p class="card-text">
                    @if(isset($store->description))
                      {{$store->description}}
                    @endif
                  </p>
                  </div>
                  <div class="card-footer bg-white">
                    <a class = "btn btn-primary" href={{route('stores.edit',['store'=> $store])}}>
                          店舗編集
                      </a>
                      <a class = "btn btn-warning" href={{route('stores.itemlist',['store'=> $store])}}>
                          商品一覧
                      </a>
                      <a class = "btn btn-secondary" href={{route('stores.detail',['store'=> $store])}}>
                          店舗の詳細
                      </a>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-end">
          {{ $stores -> appends(request() -> input() )-> links('pagination::default') }}
        </div>
  </div>


@endsection