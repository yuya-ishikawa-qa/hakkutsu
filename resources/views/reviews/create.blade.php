@extends('layouts.app')

@section('content')

<div class="container mt-4">
  <h2 class="mb-5">
    レビューの新規作成
  </h2>

  <form method="POST" action="{{ route('reviews.store')}}">
    {{csrf_field()}}

    <div class="form-group mb-5">
      <h3>商品名</h3>
      <p>ここに商品名が入ります</p>
      <div class="text-danger">
        {{$errors->first('title')}}
      </div>
    </div>
    <div class="form-group mb-5">
      <h3>投稿者名</h3>
      <p>ここに投稿者名が入ります</p>
      <div class="text-danger">
        {{$errors->first('title')}}
      </div>
    </div>

    <div class="form-group mb-5">
      <h3 class="control-label" for="title">性別</h3>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="man" value="o1">
        <label class="form-check-label">男性</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="woman" value="o2">
        <label class="form-check-label">女性</label>
      </div>
    </div>

    <div class="form-group mb-5">
      <h3 class="control-label" for="title">おすすめ度</h3>
      <div class="rating">
        <input class="rating__input hidden--visually" type="radio" id="5-star" name="rating" value="5" required />
        <label class="rating__label" for="5-star" title="5 out of 5 rating">
          <span class="rating__icon"></span>
          <span class="hidden--visually">5 out of 5 rating</span>
        </label>

        <input class="rating__input hidden--visually" type="radio" id="4-star" name="rating" value="4" />
        <label class="rating__label" for="4-star" title="4 out of 5 rating">
          <span class="rating__icon"></span>
          <span class="hidden--visually">4 out of 5 rating</span>
        </label>

        <input class="rating__input hidden--visually" type="radio" id="3-star" name="rating" value="3" />
        <label class="rating__label" for="3-star" title="3 out of 5 rating">
          <span class="rating__icon"></span>
          <span class="hidden--visually">3 out of 5 rating</span>
        </label>

        <input class="rating__input hidden--visually" type="radio" id="2-star" name="rating" value="2" />
        <label class="rating__label" for="2-star" title="2 out of 5 rating">
          <span class="rating__icon"></span>
          <span class="hidden--visually">2 out of 5 rating</span>
        </label>

        <input class="rating__input hidden--visually" type="radio" id="1-star" name="rating" value="1" />
        <label class="rating__label" for="1-star" title="1 out of 5 rating">
          <span class="rating__icon"></span>
          <span class="hidden--visually">1 out of 5 rating</span>
        </label>
      </div>
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
