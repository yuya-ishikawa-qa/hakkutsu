@extends('layouts.app')
@section('content')

<p>タイトル：{{ $title }}</p>
<p>詳細内容：{{ $content }}</p>
<p>ユーザID：{{ $user_id }}</p>
@if ($image_url)
<p>画像：<img src ="/{{ $image_url }}" width="450px"></p>
@endif

@endsection