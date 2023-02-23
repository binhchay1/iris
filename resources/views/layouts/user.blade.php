<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="generator" content="Sili-kit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="SILI - KIT chuyên cung cấp và phân phối các sản phẩm về đồ gia dụng, đồ dùng trẻ em ... Với nhiều năm hoạt động trong lĩnh vực này, SILI - KIT luôn mang đến cho khách hàng những sản phẩm chất lượng nhất">
    <meta name="keywords" content="Silikit Việt Nam, silicone">
    <link rel="canonical" href="https://silikit.vn/">

    <meta property="og:type" content="website">
    <meta property="og:title" content="SILI - KIT">
    <meta property="og:image" content="{{ asset('img/logo.png') }}">
    <meta property="og:image:secure_url" content="{{ asset('img/logo.png') }}">
    <meta property="og:description" content="SILI - KIT chuyên cung cấp và phân phối các sản phẩm về đồ gia dụng, đồ dùng trẻ em ... Với nhiều năm hoạt động trong lĩnh vực này, SILI - KIT luôn mang đến cho khách hàng những sản phẩm chất lượng nhất">
    <meta property="og:url" content="https://silikit.vn/">
    <meta property="og:site_name" content="SILI - KIT">

    <title>@yield('title')</title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" id="wp-notification-bars-css" href="{{ asset('css/lib/wp-notification-bars-public.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="home-page-style-css" href="{{ asset('css/page/homepage.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="header-footer-style-css" href="{{ asset('css/page/header-footer.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="all-pages-style-css" href="{{ asset('css/page/all-pages.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="media-style-css" href="{{ asset('css/page/media.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="organic-farm-pro-font-css" href="//fonts.googleapis.com/css?family=Source+Sans+Pro%3Aital%2Cwght%400%2C200%3B0%2C300%3B0%2C400%3B0%2C600%3B0%2C700%3B0%2C900%3B1%2C200%3B1%2C300%3B1%2C400%3B1%2C600%3B1%2C700%3B1%2C900%7CPT+Sans%3A300%2C400%2C600%2C700%2C800%2C900%7CRoboto%3A400%2C700%7CRoboto+Condensed%3A400%2C700%7COpen+Sans%7COverpass%7CMontserrat%3A300%2C400%2C600%2C700%2C800%2C900%7CPlayball%3A300%2C400%2C600%2C700%2C800%2C900%7CAlegreya%3A300%2C400%2C600%2C700%2C800%2C900%7CJulius+Sans+One%7CArsenal%7CSlabo%7CLato%7COverpass+Mono%7CSource+Sans+Pro%7CRaleway%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%7CMerriweather%7CRubik%7CLora%7CUbuntu%7CCabin%7CArimo%7CPlayfair+Display%7CQuicksand%7CPadauk%7CMuli%7CInconsolata%7CBitter%7CPacifico%7CIndie+Flower%7CVT323%7CDosis%7CFrank+Ruhl+Libre%7CFjalla+One%7COxygen%7CArvo%7CNoto+Serif%7CLobster%7CCrimson+Text%7CYanone+Kaffeesatz%7CAnton%7CLibre+Baskerville%7CBree+Serif%7CGloria+Hallelujah%7CJosefin+Sans%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C600%2C600i%2C700%2C700i%26amp%3Bsubset%3Dlatin-ext%2Cvietnamese%7CAbril+Fatface%7CVarela+Round%7CVampiro+One%7CShadows+Into+Light%7CCuprum%7CRokkitt%7CVollkorn%7CFrancois+One%7COrbitron%7CPatua+One%7CAcme%7CSatisfy%7CJosefin+Slab%7CQuattrocento+Sans%7CArchitects+Daughter%7CRusso+One%7CMonda%7CRighteous%7CLobster+Two%7CHammersmith+One%7CCourgette%7CPermanent+Marker%7CCherry+Swash%7CCormorant+Garamond%7CPoiret+One%7CBenchNine%7CEconomica%7CHandlee%7CCardo%7CAlfa+Slab+One%7CAveria+Serif+Libre%7CCookie%7CChewy%7CGreat+Vibes%7CComing+Soon%7CPhilosopher%7CDays+One%7CKanit%7CShrikhand%7CTangerine%7CIM+Fell+English+SC%7CBoogaloo%7CBangers%7CFredoka+One%7CBad+Script%7CVolkhov%7CShadows+Into+Light+Two%7CMarck+Script%7CSacramento%7CPoppins%3A100%2C200%2C300%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%26amp%3Bsubset%3Ddevanagari%2Clatin-ext%7CPT+Serif&amp;ver=5.9.5" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-style-css" href="{{ asset('css/lib/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="organic-farm-pro-basic-style-inline-css" href="{{ asset('css/lib/basic-style-inline.css') }}" type="text/css">
    <link rel="stylesheet" id="font-awesome-css" href="{{ asset('css/lib/fontawesome-all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="owl-carousel-style-css" href="{{ asset('css/lib/owl.carousel.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="google-font-css" href="{{ asset('css/lib/google-font.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="wp-custom-css" href="{{ asset('css/page/wp-custom.css') }}" type="text/css" media="all">
    <link rel="canonical" href="{{ route('homepage') }}">
    <link rel="shortlink" href="{{ route('homepage') }}">

    @yield('style')
</head>

<body>
    <div id="app">
        <main id="wa-body">
            <header id="masthead" class="site-header">
                <div id="header">
                    <div class="container">
                        <div class="header-wrap">
                            <div id="topbar">
                                <div class="topbar_section">
                                    <div class="container">
                                        <div class="row my-3">
                                            <div class="col-lg-4 col-md-3 col-sm-5 col-12">
                                                <div class="logo">
                                                    <a href="{{ route('homepage') }}" class="custom-logo-link" rel="home" aria-current="page"><img width="240" height="60" src="{{ asset('img/logo.png') }}" class="custom-logo" alt="SILI - KIT"></a>
                                                    <div class="logo-text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-7 col-12">
                                                <div class="topbar-content">
                                                    <div class="row">
                                                        <div class="col-md-0 col-0">
                                                        </div>
                                                        <div class="col-md-6 p-0">
                                                            <ul class="right-side-content">
                                                                <li class="icon">
                                                                    <div class="hi_normal"><i class="fas fa-envelope"></i></div>
                                                                </li>
                                                                <li class="title">Email Address</li>
                                                                <li class="content">silikit@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6 p-0">
                                                            <ul class="right-side-content">
                                                                <li class="icon">
                                                                    <div class="hi_normal"><i class="fas fa-phone-volume"></i> </div>
                                                                </li>
                                                                <li class="title">
                                                                    Hotline </li>
                                                                <li class="content">
                                                                    0906254698 </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-12 col-12 social">
                                                <div class="socialbox">
                                                    <a class="twitter" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter align-middle" aria-hidden="true"></i></a>
                                                    <a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f align-middle " aria-hidden="true"></i></a>
                                                    <a class="youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube align-middle" aria-hidden="true"></i></a>
                                                    <a class="pintrest" href="https://in.pinterest.com/" target="_blank"><i class="fab fa-pinterest-p align-middle " aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="container nav_wrap">
                                <div class="main-header-box">
                                    <div class="row bg-media">
                                        <div class="col-lg-9 offset-lg-1 col-md-9 col-sm-8 col-4 header-nav">
                                            <div class="menubar m-0 mt-md-0">
                                                <div class="container right_menu">
                                                    <div class="innermenubox ">
                                                        <div class="toggle-nav mobile-menu">
                                                            <span onclick="openNav()"><i class="fas fa-bars"></i></span>
                                                        </div>
                                                        <div id="mySidenav" class="nav sidenav">
                                                            <nav id="site-navigation" class="main-navigation">
                                                                <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="closeNav()"><i class="fas fa-times"></i></a>
                                                                <div class="menu clearfix">
                                                                    <ul id="menu-primary-menu" class="clearfix mobile_nav sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                                                                        <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-63"><a href="{{ route('homepage') }}" aria-current="page">Home</a></li>
                                                                        <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="{{ route('homepage') }}">Blog</a></li>
                                                                        <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="{{ route('homepage') }}">Product</a></li>
                                                                    </ul>
                                                                </div>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-4 col-6 header_btn">
                                            <div class="">
                                                <a target="_blank" href="https://www.ovationthemes.com/wordpress/organic-farm-wordpress-theme/?add-to-cart=5994" class="">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            @yield('content')
            <div class="mtsnb mtsnb-shown mtsnb-top mtsnb-absolute" id="mtsnb-71" data-mtsnb-id="71" style="background-color:#27bc34;color:#ffffff; position: fixed">
                <div class="mtsnb-container-outer">
                    <div class="mtsnb-container mtsnb-clearfix">
                        <div class="mtsnb-custom-type mtsnb-content">
                            <div class="mtsnb-custom-content">Get Double Sale Off <a class="m-3 px-3 py-1 bg-white rounded" style="color:#27bc34;background:#fff" href="tel:0906254698" rel="noopener" target="_blank">Contact Now</a>
                                <span class="d-block d-lg-inline-block mt-3 mt-lg-0"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="outer-footer">
                <div id="footer">
                    <div id="footer_box" class="darkbox">
                        <div class="container footer-cols">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 footer1">
                                    <aside id="media_image-2" class="widget widget_media_image"><img width="222" height="67" src="{{ asset('img/logo.png') }}" class="image wp-image-49  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; max-height: 97px;"></aside>
                                    <aside id="custom_html-2" class="widget_text widget widget_custom_html">
                                        <div class="textwidget custom-html-widget">
                                            <p>
                                                culpa qui officia deserunt mollitia
                                                animi, id est laborum et dolorum fuga.
                                                Et harum quidem rerum facilis est et
                                                expedita distinctio.
                                            </p>
                                            <div class="socialbox">
                                                <a class="twitter" href="#" target="_blank" rel="noopener"><i class="fab fa-twitter align-middle"></i><span class="screen-reader-text">twitter</span></a>
                                                <a class="insta" href="#" target="_blank" rel="noopener"><i class="fab fa-instagram align-middle"></i><span class="screen-reader-text">Instagram</span></a>
                                                <a class="facebook" href="#" target="_blank" rel="noopener"><i class="fab fa-facebook-f align-middle "></i><span class="screen-reader-text">facebook</span></a>
                                                <a class="youtube" href="#" target="_blank" rel="noopener"><i class="fab fa-youtube align-middle"></i><span class="screen-reader-text">youtube</span></a>
                                                <a class="linkedin" href="#" target="_blank" rel="noopener"><i class="fab fa-linkedin-in align-middle"></i><span class="screen-reader-text">linkedin</span></a>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-lg-3 col-sm-6 footer2">
                                    <aside id="nav_menu-2" class="widget widget_nav_menu">
                                        <h3 class="widget-title">Useful Links</h3>
                                        <div class="menu-footer-menu-container">
                                            <ul id="menu-footer-menu" class="menu">
                                                <li id="menu-item-59" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-59"><a target="_blank" rel="noopener" href="https://www.ovationthemes.com/wordpress/wordpress-bundle/">WordPress Bundle</a></li>
                                                <li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="https://www.ovationthemes.com/demos/organic-farm/blog/">Blog</a></li>
                                                <li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a href="https://www.ovationthemes.com/demos/organic-farm/cart/">Cart</a></li>
                                                <li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58"><a href="https://www.ovationthemes.com/demos/organic-farm/shop/">Shop</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-lg-3 col-sm-6 footer3">
                                    <aside id="custom_html-3" class="widget_text widget widget_custom_html">
                                        <h3 class="widget-title">Categories</h3>
                                        <div class="textwidget custom-html-widget">
                                            <ul>
                                                <li><a href="">Fruit</a></li>
                                                <li><a href="">Vegetable</a>Vegetable</li>
                                                <li><a href="">Beverages</a></li>
                                                <li><a href="">Dairy</a></li>
                                                <li><a href="">Packed Food</a></li>
                                                <li><a href="">Heath &amp; Fitness</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <aside id="nav_menu-3" class="widget widget_nav_menu">
                                        <h3 class="widget-title">Buy Now</h3>
                                        <div class="menu-footer-container">
                                            <ul id="menu-footer" class="menu">
                                                <li id="menu-item-94" class="custom_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-94"><a target="_blank" rel="noopener" href="https://www.ovationthemes.com/wordpress/organic-farm-wordpress-theme/?add-to-cart=5994">Buy Now</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                        <div class="copyright">
                            <div class="container">
                                <div class="row copy-text">
                                    <div class="col-lg-12 col-md-12">
                                        <p>Copyright ©<span class="credit_link"> by<a href="{{ route('homepage') }}" target="_blank"> SILI - KIT</a></span></p>
                                    </div>
                                    <a href="javascript:" id="return-to-top" style="display: none;"><i class="fas fa-angle-double-up"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.min.js') }}" id="jquery-core-js"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery-migrate.js') }}" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{ asset('js/lib/jquery.blockUI.min.js') }}" id="jquery-blockui-js"></script>
    <script type="text/javascript" src="{{ asset('js/lib/owl.carousel.js') }}" id="owl-carousel-js"></script>
    <script src="https://kit.fontawesome.com/b676d2be1a.js" crossorigin="anonymous"></script>
    @yield('script')
</body>

</html>