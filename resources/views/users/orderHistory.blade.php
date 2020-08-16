@extends('layouts.app')

@section('content')

<br><br>

<div class = "p-3 mb-2 bg-warning text-dark">注文確認</div>
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
                <form action="/orderHistory" method="get">
                    表示件数：
                    <select id="" name="disp_list" onchange="submit();">
                      <option>選択してください</option>
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                  </select>
                </form>
            </div>
              {{ $orders -> appends(request() -> input() )-> links('pagination::default') }}
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
                    <h4 class="card-title">{{$order->name}}</h4>
                  <p class="card-text">
                  <a>{{$order->cart}}</a>
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


@endsection