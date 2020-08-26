@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('store/management/request'))

@if(Session::has('flash_message'))
<div class="alert alert-success">
    {{ session('flash_message') }}
</div>
@endif
<div class="container pt-5">
    <div class="p-3 mb-5 bg-warning text-dark text-center">出店依頼はこちら</div>
    <div class="d-flex">
        <div class="mypage_button col-md-6">
            <a href="/stores/management">
                <button type="submit" class="button-hover btn btn-warning text-dark">
                    既存の方はこちら
                </button>
            </a>
        </div>
        <div class="mypage_button col-md-6">
            <a href="/stores/create">
                <button type="submit" class="button-hover btn btn-warning text-dark">
                    新規出店はこちら
                </button>
            </a>
        </div>
    </div>
</div>

@endsection