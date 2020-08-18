@extends('layouts.app')

@section('content')

<div class="container">
    <div class="p-3 mb-2 bg-warning text-dark">注文詳細</div>
<br>
    <div>

		<div class="row">
			<div class="container">
				<ul class="list-group">

					@foreach($orders_details as $orders_detail)
						<li class="list-group-item">
                            <p><img src = "/{{ $orders_detail -> image_path }}" width="100px"></p>
							<strong>{{$orders_detail -> item_name }}</strong>
                            <span class="badge">{{$orders_detail -> amount }}個</span>
							<span class="label label-success">1個あたり{{$orders_detail -> price}}円</span></br>
                            <span class="label label-success">小計{{$orders_detail -> amount * $orders_detail -> price}}円</span>

						</li>
						@endforeach
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<strong>注文金額（税込）: {{$order -> total}}円</strong>
			</div>
		</div>
		<hr>

	

</div>

</div>

@endsection