@extends('layouts.app')

@section('content')

<br><br>
{{ $user->name }}
<div class="p-3 mb-2 bg-warning text-dark">店舗情報
・商品情報</div>

  @foreach ($stores as $store)
            <div class="card mt-4">
                <div class="card-header mb-2">
                     【店舗名】:　{{ $store->store_name}}
                </div>
                <div class="card-body">
                    <p class="card-text">
                    【店舗説明】:　{{$store->description}}
                    【画像】:<img src ="/{{$store->image_path}}" width="450px"></p>
                    </p>

                </div>
                <div class="card-footer">
                <a class="card-link" href={{route('stores.edit',['store'=> $store])}}>
                        店舗編集する
                    </a>
                </div>
            </div>
            
        @endforeach


<p>===========================================</p>
<削除><商品画像><商品名><価格><br>
<a href="/store/management/index" >
        削除
</a>
（商品画像表示）
 (商品名表示)
（価格表示）<br>
(商品説明表示)
<br><br>

<div class="d-flex">

    <a href="/store/management/create" >
        <button type="submit" class="btn btn-warning col-md-6">
        店舗情報の編集
        </button>
    </a>


    <br>
    <br>

    <a href="/store/management/createitem" >
        <button type="submit" class="btn btn-warning col-md-6">
        商品を追加する
        </button>
    </a>    


    

</div>

@endsection