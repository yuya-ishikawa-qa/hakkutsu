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

  <!-- Gallery item -->
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm">
        <img src="https://picsum.photos/500/500" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a href="#" class="text-dark">商品名：</a></h5>
          <p class="small text-muted mb-0">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：</span>
            </p>
            <div class="badge badge-warning px-3 rounded-pill font-weight-normal">
              Hakkutsu
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm"><img src="https://picsum.photos/500/500" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a href="#" class="text-dark">商品名：</a></h5>
          <p class="small text-muted mb-0">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：</span>
            </p>
            <div class="badge badge-danger px-3 rounded-pill font-weight-normal">
              新商品
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm"><img src="https://picsum.photos/500/500" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a href="#" class="text-dark">商品名：</a></h5>
          <p class="small text-muted mb-0">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：</span>
            </p>
            <div class="badge badge-danger px-3 rounded-pill font-weight-normal">
              新商品
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm"><img src="https://picsum.photos/500/500" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a href="#" class="text-dark">商品名：</a></h5>
          <p class="small text-muted mb-0">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：</span>
            </p>
            <div class="badge badge-danger px-3 rounded-pill font-weight-normal">
              新商品
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm"><img src="https://picsum.photos/500/500" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a href="#" class="text-dark">商品名：</a></h5>
          <p class="small text-muted mb-0">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：</span>
            </p>
            <div class="badge badge-danger px-3 rounded-pill font-weight-normal">
              新商品
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm"><img src="https://picsum.photos/500/500" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a href="#" class="text-dark">商品名：</a></h5>
          <p class="small text-muted mb-0">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：</span>
            </p>
            <div class="badge badge-primary px-3 rounded-pill font-weight-normal">
              旬の商品
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm"><img src="https://picsum.photos/500/500" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a href="#" class="text-dark">商品名：</a></h5>
          <p class="small text-muted mb-0">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：</span>
            </p>
            <div class="badge badge-danger px-3 rounded-pill font-weight-normal">
              新商品
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm"><img src="https://picsum.photos/500/500" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a href="#" class="text-dark">商品名：</a></h5>
          <p class="small text-muted mb-0">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：</span>
            </p>
            <div class="badge badge-danger px-3 rounded-pill font-weight-normal">
              新商品
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm"><img src="https://picsum.photos/500/500" alt="" class="img-fluid card-img-top">
        <div class="p-4">
          <h5> <a href="#" class="text-dark">商品名：</a></h5>
          <p class="small text-muted mb-0">ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。ここに説明が入ります。</p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：</span>
            </p>
            <div class="badge badge-success px-3 rounded-pill font-weight-normal">
              人気商品
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Pagination-->
  <div class="pagination">
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
  </div>

</div>


@endsection
