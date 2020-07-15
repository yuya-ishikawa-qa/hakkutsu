@extends('layouts.app')

@section('content')

<div class="container mt-4">
  <div class="mb-4">
    <a href="{{route('reviews.create')}}" class="btn btn-primary">
      レビューを新規作成する
    </a>
  </div>
  @foreach ($reviews as $review)
  <div class="card mt-4">
    <div class="card-header mb-2">
      {{ $review->title }}
      　<a class="card-link" href="{{route('reviews.show', ['review' => $review])}}">
        商品名が入ります
        </a>
    </div>
    <div class="card-body row no-gutters">
      <div class="col-lg-6 z-depth-2">
        <img class="img-fluid" src="https://picsum.photos/400/200" alt="Sample image">
      </div>
      <div class="card-text col-lg-6">
        <p>{{ $review->body }}</p>
        <a class="card-link" href="{{route('reviews.show', ['review' => $review])}}">
        詳細を見る
        </a>
      </div>

    </div>
    <div class="card-footer">
      <span class="mr-2">
        投稿日時：{{ $review->created_at}}
      </span>
    </div>
  </div>
  @endforeach

  <div class="d-flex justify-content-center mb-5">
    {{$reviews->links()}}
  </div>
</div>


</div>

@endsection('content')
