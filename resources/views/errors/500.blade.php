<?php App::setLocale(config('app.http_status_code_locale')); ?>

@extends('errors.layouts.base')

@section('title', __("http_status_code.500.title"))

@section('message', __("http_status_code.500.message"))

@section('detail', __("http_status_code.500.detail"))

@section('link')
  <p><a href="{{route('contact.index')}}">お問い合わせはこちら</a></p>
@endsection
