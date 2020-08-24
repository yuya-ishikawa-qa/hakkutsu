@extends('layouts.app')

@section('content')


@if(Session::has('flash_message'))
<div class="alert alert-success">
    {{ session('flash_message') }}
</div>
@endif
<div class="container">
    <div class="text-center">
        <h3 class="p-3 mb-2 bg-warning text-dark text-center">会計</h3><br>
        <div class="mx-auto" style="width: 600px;">
            <div class="card">
                <div class="card-header">
                    送付先の確認
                </div>
                <div class="card-body">

                    @if($user -> destination_postal_code)
                    <div>
                        郵便番号：{{$user -> destination_postal_code}}<br>
                        住所：{{$user -> destination_1.$user -> destination_2.$user -> destination_3}}
                    </div>
                    @else
                    <div>
                        郵便番号：{{$user -> postal_code}}<br>
                        住所：{{$user -> address_1.$user -> address_2.$user -> address_3}}
                    </div>
                    @endif

                </div>
                <div class="card-footer">
                    <a href="{{route('users.createDestination')}}" class="btn btn-success pull-right btn-lg" role="button">送付先の変更及び登録</a>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    会計金額の確認
                </div>
                <div class="card-body">
                    合計:{{$total}}円
                </div>
            </div>
            <hr>
            <a>確認の上、よろしければ、</a><br>
            <a>決済画面へお進み下さい。</a>
        </div>


        <br>
        <div class="text-center">
            <form action="{{ asset('pay') }}" method="POST">
                {{ csrf_field() }}
                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-amount={{$total}}円 data-name="Stripe決済デモ" data-label="決済をする" data-description="これはデモ決済です" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto" data-currency="JPY">
                </script>
            </form>
        </div>
    </div>
</div>
@endsection