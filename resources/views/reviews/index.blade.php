@extends('layouts.app')

@section('content')
  <div class="container mt-4">
      <div class="mb-4">
          <a href="{{route('reviews.create')}}" class="btn btn-primary">
            レビューを新規作成する
          </a>
      </div>

      @foreach ($posts as $post)
      <div class="card mt-5">
        <div class="card-header mb-2">
          <a class="card-link" href="reviews/{{$post->id}}">商品名：{{ $post->item->item_name }}</a>
        </div>
          <div class="card-body row no-gutters">
            <div class="col-lg-6 z-depth-2">
              <img class="img-fluid item-display" src="{{asset('storage/images/'.$post->item->image_path)}}" alt="Sample image">
            </div>
            <div class="card-text col-lg-6">
              <p>{{ $post->title }}</p>
              <p>{{ $post->body }}</p>
              <a class="card-link" href="reviews/{{$post->id}}">
              詳細を見る
              </a>
            </div>
          </div>
        <div class="card-footer">
          <span class="mr-2">
            投稿日時：{{ $post->created_at}}
          </span>
        </div>
      </div>
      @endforeach
    <div class="d-flex justify-content-end">
      {{ $posts -> appends(request() -> input() )-> links('pagination::default') }}
    </div>
  </div>


  </div>

@endsection('content')
