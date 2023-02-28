<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name="robots" content="noindex, nofollow, max-image-preview:large">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="generator" content="WordPress 6.0.3">
    <meta name="generator" content="WooCommerce 7.0.0">
    <meta property="og:site_name" content="IRIS">
    <meta property="og:url" content="https://iris.vn">
    <meta property="og:locale" content="en_US">
    <meta property="og:description" content="IRIS landing page">
    <meta property="og:title" content="IRIS">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://iris.vn">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="stylesheet" id="multiscroll-css" href="{{ asset('css/plus/jquery.multiscroll.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="header-css" href="{{ asset('css/page/header.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.cdnfonts.com/css/gilroy" rel="stylesheet">
    @yield('style')
</head>

<body>
    <div id="app">
        <main id="wa-body">
            @yield('content')
        </main>
    </div>
    @yield('script')
</body>

</html>