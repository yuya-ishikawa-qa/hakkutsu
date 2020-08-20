@extends('layouts.app')

@section('content')

<div class="container mt-4">
  <h2 class="mb-5">
    レビューの新規作成
  </h2>

  <form method="POST" action="{{ route('reviews.store')}}">
    {{csrf_field()}}

    <div class="form-group mb-5">
      <h3>商品コード：{{$data}}</h3>
    </div>

    <div class="form-group mb-5">
      <h3>商品名：{{$item->item_name}}</h3>
    </div>

    <div class="form-group mb-5">
      <h3>タイトル</h3>
      <input id="title" name="title" class="form-control" value="{{old('title')}}" type="text">
      @if (count($errors) > 0)
        @foreach ($errors->get('title') as $error)
        <div class="text-danger">{{ $error }}</div>
        @endforeach
        @endif
    </div>
    <div class="form-group mb-5">
      <h3>レビュー</h3>
      <textarea id="body" name="body" class="form-control" rows="4">{{old('body')}}</textarea>
      @if (count($errors) > 0)
        @foreach ($errors->get('body') as $error)
        <div class="text-danger">{{ $error }}</div>
        @endforeach
        @endif
    </div>

    <input type="hidden" id="item_id" name="item_id" value="{{$data}}">
    <input type="hidden" id="user_id" name="user_id" value="{{('user_id')}}">

    <div class="my-2 d-flex justify-content-around">
      <a class="btn btn-outline-secondary btn-lg" href="{{route('reviews.index')}}">
        キャンセル
      </a>
      <button type="submit" class="btn btn-outline-primary btn-lg">
        投稿する
      </button>
    </div>
  </form>

</div>
</div>

@endsection('content')
