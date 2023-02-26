<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
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
    <meta property="og:image" content="https://webon.qodeinteractive.com/wp-content/uploads/2020/11/open_graph.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="stylesheet" id="webon-main-css" href="{{ asset('css/plus/main.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="webon-core-style-css" href="{{ asset('css/plus/webon-core.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="webon-google-fonts-css" href="https://fonts.googleapis.com/css?family=DM+Sans%3A500%2C700%7CPoppins%3A500%2C700%7CSpectral%3A500%2C700&amp;subset=latin-ext&amp;display=swap&amp;ver=1.0.0" type="text/css" media="all">
    <style id="webon-style-inline-css" type="text/css">
        #qodef-page-outer {
            margin-top: -101px;
        }

        body {
            background-color: #1d1d1f;
        }

        #qodef-page-inner {
            padding: 0 0 0 0;
        }

        @media only screen and (max-width: 1024px) {
            #qodef-page-inner {
                padding: 0 0 0 0;
            }
        }

        .qodef-header-sticky {
            border-bottom: 1px solid #dbdbdb;
            border-color: #dadce0;
        }

        .qodef-header-navigation ul li .qodef-drop-down-second {
            top: calc(100% + 1px);
        }

        .qodef-page-title .qodef-m-content {
            padding-top: 101px;
        }

        .qodef-header--minimal #qodef-page-header {
            background-color: rgba(255, 255, 255, 0);
        }

        .qodef-mobile-header--minimal #qodef-mobile-header-navigation .qodef-m-inner {
            background-color: #1d1d1f;
        }

        .qodef-mobile-header--minimal #qodef-mobile-header-navigation .qodef-m-inner {
            color: #ffffff;
        }

        .qodef-mobile-header--minimal #qodef-page-mobile-header {
            background-color: #1d1d1f;
        }

        .qodef-mobile-header--minimal #qodef-page-mobile-header .qodef-opener-icon .qodef-m-icon {
            color: #ffffff;
        }

        @media only screen and (max-width: 680px) {
            h1 {
                font-size: 57px;
            }

            h2 {
                font-size: 50px;
            }

            h3 {
                font-size: 40px;
            }
        }
    </style>
    <link rel="stylesheet" id="elementor-post-3715-css" href="{{ asset('css/plus/post-3715.css') }}" type="text/css" media="all">
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js') }}" id="jquery-migrate-js"></script>

    @yield('style')
</head>

<body class="page-template page-template-page-full-width page-template-page-full-width-php page page-id-3715 theme-webon qode-framework-1.1.6 woocommerce-js qodef-qi--no-touch qi-addons-for-elementor-1.5.4 qodef-back-to-top--enabled qodef-header--minimal qodef-header-appearance--sticky qodef-header--transparent qodef-mobile-header--minimal qodef-drop-down-second--full-width qodef-drop-down-second--default webon-core-1.1.1 webon-1.3 qodef-content-grid-1300 qodef-search--fullscreen elementor-default elementor-kit-19 elementor-page elementor-page-3715 qodef-browser--chrome qodef-vertical-split-slider--initialized ms-viewing-0 e--ua-blink e--ua-chrome e--ua-webkit" itemscope="" itemtype="https://schema.org/WebPage" style="overflow: hidden; height: 100%;" data-elementor-device-mode="desktop">
    <div id="app">
        <main id="wa-body">
            @yield('content')
        </main>
    </div>
    @yield('script')
</body>

</html>