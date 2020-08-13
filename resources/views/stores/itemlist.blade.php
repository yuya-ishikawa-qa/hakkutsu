@extends('layouts.app')

@section('content')

<div class="text-right">
ユーザー名:{{ Auth::user()->name }}<br>
店名:{{ $store->store_name}}
</div>
<div class="container">
　<!-- Shop Toolbar-->
    <div class="row justify-content-between">
      <div class="mb-2 ml-4 shop-sorting">
        <p class="mr-4">総件数: {{ $items -> total() }}件</p>
          <form action="/items" method="get">
              表示件数：
              <select id="" name="disp_list" onchange="submit">
                <option>選択してください</option>
                <option>10</option>
                <option>15</option>
                <option>20</option>
            </select>
          </form>
      </div>
        {{ $items -> appends(request() -> input() )-> links('pagination::default') }}
    </div>

  <!-- Gallery item -->
  <div class="row">
    @foreach($items as $key => $item)
      @if($loop->iteration % 3 == 1 && $loop->iteration !=1)
            </div>
            <div class="row mt-3">
      @endif
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm">
        <img src="{{asset($item->image_path)}}" alt="" class="item-display img-fluid card-img-top ">
        <div class="p-4">
        <h5> <a href="/items/{{$item->id}}" class="text-dark">商品名：{{$item->item_name}}</a></h5>
          <p class="small text-muted mb-0">
            @if(isset($item->description))
              {{$item->description}}
            @endif
          </p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：{{$item->price}}</span>
            </p>
            <div class="badge badge-warning px-3 rounded-pill font-weight-normal">
              Hakkutsu
            </div>
          </div>
          <a class="btn btn-primary" href={{route('items.edit',['store' => $store,'item'=> $item])}}>
                    編集する
          </a>
          <form
                style="display: inline-block;"
                method="POST"
                action="{{route('items.destroy',['store'=> $store,'item'=> $item])}}"
          >
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger">削除する</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-end">
    {{ $items -> appends(request() -> input() )-> links('pagination::default') }}
  </div>
</div>

<div class = "text-center">
  <a class="btn btn-primary btn-lg" href= {{route('items.create',['store' => $store])}}>
          新規の出品はこちら
  </a>
</div>

@endsection
