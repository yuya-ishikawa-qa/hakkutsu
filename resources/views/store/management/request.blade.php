@extends('layouts.app')

@section('content')

@section('breadcrumbs', Breadcrumbs::render('store/management/request'))

@if(Session::has('flash_message'))
<div class="alert alert-success">
    {{ session('flash_message') }}
</div>
@endif
<div class="container pt-5">
    <div class="p-3 mb-2 bg-warning text-dark  text-center">出店依頼はこちら</div>
    <br>
    <div class="d-flex">

        <a href="/stores/management">
            <button type="submit" class="btn btn-warning col-md-6">
                既存の方はこちら
            </button>
        </a>
        <br>
        <br>
        <a href="/stores/create">
            <button type="submit" class="btn btn-warning col-md-6">
                新規出店はこちら
            </button>
        </a>

    </div>
</div>

@endsection
