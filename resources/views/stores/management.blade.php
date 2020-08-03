@extends('layouts.app')

@section('content')

<br><br>

<div class = "p-3 mb-2 bg-warning text-dark">店舗情報
・商品情報</div>
<div class = "text-right">
{{ Auth::user()->name }}
</div>

  @foreach ($stores as $store)
            <div class = "card mt-4">
                <div class = "card-header mb-2">
                     【店舗名】:　{{ $store->store_name}}
                </div>
                <div class = "card-body">
                    <p class = "card-text">
                    【店舗説明】:　{{$store->description}}
                    【画像】:<img src = "/{{$store->image_path}}" width="450px"></p>
                    </p>

                </div>
                <div class = "card-footer">
                    <a class = "card-link" href={{route('stores.edit',['store'=> $store])}}>
                        店舗編集する
                    </a>
                    <a class = "card-link" href={{route('stores.itemlist',['store'=> $store])}}>
                        商品一覧を見る
                    </a>
                </div>
            </div>
            
        @endforeach
</div>

<div class="row">
    @foreach($items as $key => $item)
      @if($loop->iteration % 3 == 1 && $loop->iteration !=1)
            </div>
            <div class="row mt-3">
      @endif
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm">
        <img src="{{asset('storage/images/'.$item->image_path)}}" alt="" class="item-display img-fluid card-img-top ">
        <div class="p-4">
        <h5> <a href="items/{{$item->id}}" class="text-dark">商品名：{{$item->item_name}}</a></h5>
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
        </div>
      </div>
    </div>
    @endforeach
  </div>

@endsection