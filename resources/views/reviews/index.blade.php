@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('reviews'))

  <div class="container mt-4">
      @foreach ($reviews as $review)
      <div class="card mt-5">
        <div class="card-header mb-2">
          <a class="card-link" href="reviews/{{$review->id}}">商品名：{{ $review->item->item_name }}</a>
        </div>
          <div class="card-body row no-gutters">
            <div class="col-lg-6 z-depth-2">
              <img class="img-fluid item-display" src="{{asset(Storage::disk('s3')->url($review->item->image_path))}}" alt="Sample image">
            </div>
            <div class="card-text col-lg-6">
              <p>{{ $review->title }}</p>
              <p>{{ $review->body }}</p>
              <a class="card-link" href="reviews/{{$review->id}}">
              詳細を見る
              </a>
            </div>
          </div>
        <div class="card-footer">
          <span class="mr-2">
            投稿日時：{{ $review->created_at->format('Y年m月d日')}}
          </span>
        </div>
      </div>
      @endforeach
    <div class="d-flex justify-content-end">
      {{ $reviews -> appends(request() -> input() )-> links('pagination::default') }}
    </div>
  </div>


  </div>

@endsection('content')
