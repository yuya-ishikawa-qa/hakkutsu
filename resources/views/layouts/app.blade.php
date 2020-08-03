<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>HAKKUTSU 地域ブランド応援サイト</title>
  <script src="{{ asset('js/app.js') }}"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  @include('commons.header')
  @include('commons.error_messages')
  @yield('breadcrumbs')
  @yield('content')
  @include('commons.footer')
</body>

</html>