@extends('layouts.app')

@section('content')

<div class="error-wrap text-center">
  <section>
    <h1 class="">@yield('title')</h1>
    <p class="error-message text-muted mt-5">@yield('message')</p>
    <p class="error-detail text-muted mt-5">@yield('detail')</p>
    @yield('link')
  </section>
</div>

@endsection
