<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.cdnfonts.com/css/gilroy" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    @yield('style')
    <link href="img/logo-black.png" rel="icon">

</head>

<body>
    <div id="app">
        @include('layouts.header')
        @include('sweetalert::alert')
        <main id="wa-body">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>

    @yield('script')
</body>

</html>