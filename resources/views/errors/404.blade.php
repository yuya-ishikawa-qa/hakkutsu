<?php App::setLocale(config('app.http_status_code_locale')); ?>

@extends('errors.layouts.base')

@section('title', __("http_status_code.404.title"))

@section('message', __("http_status_code.404.message"))

@section('detail', __("http_status_code.404.detail"))

@section('link')
  <p><a href="{{env('APP_URL')}}">トップページへ&gt;&gt;</a></p>
@endsection
