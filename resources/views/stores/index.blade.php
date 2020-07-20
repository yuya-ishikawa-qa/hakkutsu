@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Shop Toolbar-->
  　<div class="row justify-content-between">
        <div class="mb-2 ml-4 shop-sorting">
        </div>
        {{ $stores->appends(request()->query())->links() }}
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
                <h4 class="card-title">{{$store->store_name}}</h4>
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

    </div>
    <!-- Pagination-->
      <div class="row justify-content-between">
          <div class="mb-2 ml-4 shop-sorting">
          </div>
          {{ $stores->appends(request()->query())->links() }}
      </div>
</div>

@endsection
