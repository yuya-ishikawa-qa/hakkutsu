@extends('layouts.app')

@section('content')

<div class="container mt-4">
  <div class="row mt-5">
  <h1 class="my-5">商品レビュー</h1>
    <div class="row pb-5">

      <div class="col-md-8">
        <img class="img-fluid item-primary-display" src="{{asset('storage/images/'.$review->item->image_path)}}" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">タイトル：{{ $review->title }}</h3>
        <h3 class="my-3">投稿者名：{{ Auth::user()->name}}</h3>
        <h3 class="my-3">商品名：{{ $item->item_name}}</h3>
        <h3 class="my-3">投稿日時：{{ $review->created_at->format('Y年m月d日')}}</h3>
        <p>{{ $review->body }}</p>
        <div class="mt-5">
          @if(Auth::id() == $review->user_id)
          <form method="POST" action="{{route ('reviews.destroy', ['review' => $review])}}">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button class="btn btn-outline-danger btn-block">このレビューを削除する</button>
          </form>
          @endif
        </div>
          <div class="mt-5">
                <a class="btn btn-outline-primary w-100" href="{{ route('stores.index')}}">店舗一覧はこちら</a>
          </div>
          <div class="mt-5">
                <a class="btn btn-outline-success w-100" href="{{ route('items.index')}}">商品一覧はこちら</a>
          </div>
          <div class="mt-5">
                <a class="btn btn-outline-secondary w-100" href="{{ route('reviews.index')}}">商品レビュー一覧に戻る</a>
  　　　　　</div>
        </div>

    </div>

    <!-- 商品の新着 -->
    <h3 class="my-5">この商品を買った人はこんな商品を購入しています。</h3>
    <div class="row">
      @foreach ($randomItemInformation as $item)
      <div class="col-md-3 col-sm-6 mb-4">
        <a href="/items/{{$item->id}}">
        <img class="img-fluid item-four-display" src="{{asset('storage/images/'.$item->image_path)}}" alt="">
      </div>
      @endforeach

    </div>

  </div>


</div>

@endsection('content')
