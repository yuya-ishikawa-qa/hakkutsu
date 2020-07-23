@extends('layouts.app')

@section('content')


<div class="container">
　<!-- Shop Toolbar-->
    <div class="row justify-content-between">
      <div class="mb-2 ml-4 shop-sorting">
        <p>総件数: {{ $items -> total() }}件</p>
          <form action="/items" method="get">
              表示件数：
              <select id="" name="disp_list" onchange="submit();">
                <option value="">選択してください</option>
                <option value="10">10</option>
                <option value="15">20</option>
                <option value="20">50</option>
            </select>
          </form>
      </div>
      <div class="pagination">
        {{ $items -> appends(['disp_list' => (!empty($_GET['disp_list']))]) -> render() }}
      </div>
    </div>

  <!-- Gallery item -->
  <div class="row">
    @foreach($items as $key => $item)
      @if($loop->iteration % 3 == 1 && $loop->iteration !=1)
            </div>
            <div class="row mt-3">
      @endif
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="bg-white rounded shadow-sm">
        <img src="{{asset('storage/images/'.$item->image_path)}}" alt="" class="img-fluid card-img-top">
        <div class="p-4">
        <h5> <a href="items/{{$item->id}}" class="text-dark">商品名：{{$item->item_name}}</a></h5>
          <p class="small text-muted mb-0">
            @if(isset($item->description))
              {{$item->description}}
            @endif
          </p>
          <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <p class="small mb-0">
              <span class="font-weight-bold">金額：{{$item->price}}</span>
            </p>
            <div class="badge badge-warning px-3 rounded-pill font-weight-normal">
              Hakkutsu
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
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
