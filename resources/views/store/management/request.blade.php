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
        <div class="mypage_button">
            <a href="/stores/management" class="button-hover btn btn-warning text-dark">
                既存の方はこちら
            </a>
        </div>
    </div>
    <div class="d-flex">
        <div class="mypage_button">
            <a href="/stores/create" class="button-hover btn btn-warning text-dark">
                新規出店はこちら
            </a>
        </div>
    </div>
</div>

@endsection