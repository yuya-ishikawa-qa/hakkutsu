@extends('layouts.app')

@section('content')

    <h1>id = {{ $mypage->id }} </h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $mypage->id }}</td>
        </tr>
        <tr>
            <th>お名前</th>
            <td>{{ $mypage->name }}</td>
        </tr>
    </table>

@endsection