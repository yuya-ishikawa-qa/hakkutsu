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
                </div>
            </div>
            
        @endforeach
</div>

@endsection