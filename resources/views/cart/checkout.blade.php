@extends('layouts.app')

@section('content')

    <div class="p-3 mb-2 bg-warning text-dark">会計</div>
    <br>

<div class="row justify-content-center">
	<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <!-- <div id="charge-error" class="alert alert-danger {{!Session::has('error')? 'hidden' : ''}}">
                {{Session::get('error')}}
            </div> -->
        </br>
        <form action="{{route('checkout')}}" method="post" id="checkout-form" >
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name">名前</label>
                        <input type="text" id="name" class="form-control" required name="name">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="destination">送付先</label>
                        <input type="text" id="destination" class="form-control" required name="destination">
                    </div>
                </div>
                <hr>
                
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-name">カード名義</label>
                        <input type="text" id="card-name" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-number">クレジットカード番号</label>
                        <input type="text" id="card-number" class="form-control" required name="card-number">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="card-expiry-month">有効月</label>
                                <input type="text" id="card-expiry-month" class="form-control" required name="card-expiry-month"> 
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="card-expiry-year">有効年</label>
                                <input type="text" id="card-expiry-year" class="form-control" required name="card-expiry-year">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-cvc">CVC</label>
                        <input type="text" id="card-cvc" class="form-control" required name="card-cvc">
                    </div>
                </div>
                </div>

                {{csrf_field()}}
                <br>
                <h4>支払い金額: {{$total}}円</h4>
                <br>

                <button type="submit" class="btn btn-warning">購入する</button>
        </form>
    </div>
</div>    

@endsection