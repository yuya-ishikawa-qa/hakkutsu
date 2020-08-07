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
      <div class="text-danger">
        {{$errors->first('title')}}
      </div>
    </div>
    <div class="form-group mb-5">
      <h3>レビュー</h3>
      <textarea id="body" name="body" class="form-control" rows="4">{{old('body')}}
      </textarea>
      <div class="text-danger">
        {{$errors->first('body')}}
      </div>
    </div>

    <input type="hidden" id="item_id" name="item_id" value="{{$data}}">
    <input type="hidden" id="user_id" name="user_id" value="{{('user_id')}}">

    <div class="mt-5">
      <a class="btn btn-secondary" href="{{route('reviews.index')}}">
        キャンセル
      </a>
      <button type="submit" class="btn btn-primary">
        投稿する
      </button>
    </div>
  </form>

</div>
</div>

@endsection('content')
