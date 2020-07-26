@extends('layouts.app')

@section('content')

<div class="container mt-4">
  <div class="row mt-5">
  <h1 class="my-5">商品レビュー</h1>
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="https://picsum.photos/750/500" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">タイトル：{{ $review->title }}</h3>
        <h3 class="my-3">投稿者名：</h3>
        <h3 class="my-3">商品名：</h3>
        <h3 class="my-3">投稿日時：投稿日時：{{ $review->created_at}}</h3>
        <p>{{ $review->body }}</p>
        <div class="mt-5">
          <form method="POST" action="{{route ('reviews.destroy', ['review' => $review])}}">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button class="btn btn-danger">削除</button>
          </form>
        </div>
        <div class="d-flex justify-content-between mt-5">
          <div>
              <a class="btn btn-primary" href="{{ route('items.index')}}">この商品の取り扱い店舗</a>
          </div>
          <div>
              <a class="btn btn-primary" href="{{ route('items.index')}}">商品一覧</a>
          </div>
　　
        </div>


      </div>



    </div>

    <!-- 商品の新着 -->
    <h3 class="my-5">この商品を買った人はこんな商品を購入しています。</h3>
    <div class="row">
      <div class="col-md-3 col-sm-6 mb-4">
        <img class="img-fluid" src="https://picsum.photos/500/300" alt="">
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="https://picsum.photos/500/300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="https://picsum.photos/500/300" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="https://picsum.photos/500/300" alt="">
        </a>
      </div>

    </div>

  </div>


</div>

@endsection('content')
