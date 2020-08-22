@extends('layouts.app')

@section('content')

<br><br>

<div class = "p-3 mb-2 bg-warning text-dark">注文履歴</div>
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
              <p>総件数: {{ $orders -> total() }}件</p>
              {{ $orders -> appends(request() -> input() )-> links('pagination::default') }}
            </div>
        </div>
      <!-- Page Content-->

        <div class="card-deck row">
          @foreach($orders as $key => $order)
          @if($loop->iteration % 3 == 1 && $loop->iteration !=1)
            </div>
            <div class="card-deck row mt-3">
          @endif
              <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                 <div class="card-body">
                    <a class="card-title" href={{route('users.ordersDetails',['order'=> $order])}}>
                    注文日時：{{$order->created_at}}
                    </a>
                  <p class="card-text">
                    <a>注文金額：{{$order->total}}円</a>
                  </p>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
        <div class="d-flex justify-content-end">
          {{ $orders -> appends(request() -> input() )-> links('pagination::default') }}
        </div>
  </div>
</div>

@endsection