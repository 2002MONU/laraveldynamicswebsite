<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title')</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{url('assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="tRetail Labs is a travel tech firm specializing in travel retail and duty free industry." />


    <meta name="description" content="tRetail Labs is a travel tech firm specializing in travel retail and duty free industry.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="tRetail Labs" />
    <meta name="description" content="tRetail Labs is a travel tech firm specializing in travel retail and duty free industry." />
    <meta name="author" content="" />
    <meta name="description" content="tRetail Labs is a travel tech firm specializing in travel retail and duty free industry."/>
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
    <link rel="canonical" href="https://tretaillabs.com/" />
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="tRetail Labs">
    <meta property="og:description" content="tRetail Labs is a travel tech firm specializing in travel retail and duty free industry.">
    <meta property="og:url" content="https://tretaillabs.com/">
    <meta property="og:site_name" content="tRetail Labs">
    <meta property="og:updated_time" content="2021-04-13T14:03:56+00:00">
    <meta property="og:image" content="../v3/assets/images/logo-og.jpg">
    <meta property="og:image:secure_url" content="../v3/assets/images/logo-og.jpg">
    <meta property="og:image:width" content="521">
    <meta property="og:image:height" content="210">
    <meta property="og:image:alt" content="Homepage">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Homepage - tRetail Labs">
    <meta name="twitter:description" content="tRetail Labs is a travel tech firm specializing in travel retail and duty free industry.">
    <meta name="twitter:image" content="{{url('../v3/assets/images/logo-og.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/images/fav.png')}}">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{url('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/bootstrap-select/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/nisoz-icons/style.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/owl-carousel/assets/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/vendors/owl-carousel/assets/owl.theme.default.min.css')}}" />
        <!-- Your code -->
        {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script>     --}}
         <!-- template styles -->
    <link rel="stylesheet" href="{{url('assets/css/nisoz.css')}}" />
    <!--- google captcha script-------->
    <script src="https://www.google.com/recaptcha/api.js?render={{config('services.recaptcha.site_key')}}"></script>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: {{url('assets/images/loader.png')}};"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu main-menu-with-border">
                <div class="container-fluid justify-content-between">
                    <div class="main-menu__logo">
                        <a href="index.html">
                            <img src="{{asset('website-images/logoimage/'.$logo->logo)}}"   alt="nisoz">
                        </a>
                    </div><!-- /.main-menu__logo -->
                    <div class="main-menu__nav">
                        <ul class="main-menu__list">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About Us</a></li>
                            <li class="dropdown">
                                <a href="#">Services</a>
                                <ul>
                                    <li><a href="{{url('service/nrture')}}">Nrture</a></li>
                                    <li><a href="javascript:void(0);">Xamine</a></li>
                                    <li><a href="javascript:void(0);">Xplore</a></li>
                                    <li><a href="javascript:void(0);">Innovate</a></li>
                                   
                                </ul>
                            </li>
                            <!-- <li><a href="javascript:void(0);">Brands</a></li>
                            <li><a href="javascript:void(0);">Clients</a></li> -->
                            <li><a href="{{url('blog')}}">Blog</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                    </div><!-- /.main-menu__nav -->
                    <div class="main-menu__right">
                        <a href="#" class="main-menu__toggler mobile-nav__toggler">
                            <i class="fa fa-bars"></i>
                        </a><!-- /.mobile menu btn -->
                        <!-- <a href="tel:+9236809850" class="main-menu__phone">
                            <i class="icon-telephone"></i>
                            +61 410 104 012
                        </a> -->
                        <!-- /.phone-number -->
                    </div><!-- /.main-menu__right -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->
        <div class="stricky-header stricked-menu main-menu main-menu-with-border">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->   