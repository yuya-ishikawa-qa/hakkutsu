<?php App::setLocale(config('app.http_status_code_locale')); ?>

@extends('errors.layouts.base')

@section('title', __("http_status_code.403.title"))

@section('message', __("http_status_code.403.message"))

@section('detail', __("http_status_code.403.detail"))
