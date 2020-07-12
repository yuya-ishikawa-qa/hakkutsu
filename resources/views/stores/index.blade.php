@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Shop Toolbar-->
  　<div class="row justify-content-between">
        <div class="mb-2 ml-4 shop-sorting">
          <label >並び替え</label>
          <select class="form-control">
            <option>価格順</option>
            <option>新着順</option>
            <option>人気順</option>
          </select>
        </div>
        <!-- Pagination-->
        <div class="pagination">
          <ul class="pages">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <a class="btn btn-outline-secondary btn-sm" href="#">次へ<i class="icon-arrow-right"></i></a>
          </ul>　
        </div>
  </div>

    <!-- Page Content-->

    <div class="card-deck row">
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <a href="">
              <button class="btn btn-secondary">お店の詳細</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/300/200" alt="">
          <div class="card-body">
            <h4 class="card-title">お店の名前</h4>
            <p class="card-text">ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。ここに文字が入ります。</p>
          </div>
          <div class="card-footer bg-white">
            <button class="btn btn-secondary">お店の詳細</button>
          </div>
        </div>
      </div>
    </div>


      <!-- Pagination-->
      <nav class="pagination">
              <div class="column">
                <ul class="pages">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li>...</li>
                  <li><a href="#">12</a></li>
                  <a class="btn btn-outline-secondary btn-sm" href="#">次へ<i class="icon-arrow-right"></i></a>
                </ul>
              </div>
      </nav>

    </div>



@endsection
