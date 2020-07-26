@extends('layouts.app')

@section('content')

<div class="p-3 mb-2 bg-warning text-dark">出店依頼はこちら</div>
<br>



<div class="d-flex">

    <a href="/store/management/index" >
        <button type="submit" class="btn btn-warning col-md-6">
        既存の方はこちら
        </button>
    </a>


    <br>
    <br>

    <a href="/store/management/create" >
        <button type="submit" class="btn btn-warning col-md-6">
        新規出店はこちら
        </button>
    </a>

</div>


@endsection