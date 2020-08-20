@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('stores'))

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
                  <div class="card-footer bg-white text-center">
                    <a href='stores/{{$store->id}}'>
                        <button class="btn btn-block btn-outline-secondary">お店の詳細はこちら</button>
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
