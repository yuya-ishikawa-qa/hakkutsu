@extends('layouts.app')

@section('content')

<div class="container">
    <div class="p-3 mb-2 bg-warning text-dark">カート内の商品</div>
<br>
    <div>
@if(Session::has('cart'))
		<div class="row">
			<div class="container">
				<ul class="list-group">

					@foreach($cart_items as $cart_item)
						<li class="list-group-item">
                            <p><img src = "/{{ $cart_item['item']['image_path'] }}" width="100px"></p>
							<strong>{{$cart_item['item']['item_name']}}</strong>
                            <span class="badge">{{$cart_item['qty']}}個</span>
							<span class="label label-success">1個あたり{{$cart_item['item']['price']}}円</span></br>
                            <span class="label label-success">小計{{$cart_item['price']}}円</span>

							<div class="btn-group">
								
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">数量の変更 <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('items.increaseByOne',['id' =>  $cart_item['item']['id']])}}">1個増やす</a></li>
                                    <li><a href="{{route('items.reduceByOne',['id' =>  $cart_item['item']['id']])}}">１個減らす</a></li>
                                    <li><a href="{{route('items.remove',['id' =>  $cart_item['item']['id']])}}">削除</a></li>
                                </ul>
							</div>
						</li>
						@endforeach
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<strong>合計（税込）: {{$totalPrice}}円</strong>
			</div>
		</div>
		<hr>

		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <a href="{{route('checkout')}}" type="button" class="btn btn-warning">会計に進む</a>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>カート情報はありません</h2>

			</div>
		</div>
	@endif
</div>

</div>

@endsection