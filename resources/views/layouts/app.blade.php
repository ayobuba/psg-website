<!doctype html>
<html class="no-js" lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-65978169-6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-65978169-6');
    </script>

    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5cecd95a5676af001119e9ee&product=inline-share-buttons" async="async"></script>

    
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ URL::asset('./assets/favicon.ico') }}" />

    <!-- Twitter Meta -->
    <meta name="twitter:site" content="@PLSGovt">
    <meta name="twitter:creator" content="@PLSGovt">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="Official Plateau State Government Page">
    <meta name="twitter:image" content="{{ URL::asset('./assets/img/platStet.png') }}">

    <meta name="google-site-verification" content="UAD6KPgApxuFKVgBYXwnUpZuM79LNYROXw0n4YI53_A" />

    <meta property="og:url" content="https://plateaustate.gov.ng" />
    <!-- Facebook Meta -->
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="Official Plateau State Government Page">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ URL::asset('./assets/img/platStet.png') }}">
    <meta property="og:image:secure_url" content="{{ URL::asset('./assets/img/platStet.png') }}">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('meta::manager')
    
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/app.css') }}">
    
    @yield('styles')
  </head>
<body>

    <div class="uk-width-1-1@m" uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
    <div class="wrapper uk-flex" style="z-index: 12000;">
        <div class="logo mt:40px">
            <a class="logoLink uk-display-block" href="{{ route('home') }}">
                <img src="{{ URL::asset('./assets/img/platStet.png') }}" alt="">
            </a>
            <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary" href="#"></a>
        </div>
        <div id="nav">
        <nav id="top" class="uk-navbar-container mt:40px" style="position: relative; z-index: 980;">
            <div class="main-container">
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-iconnav">
                        <li><a href="#" uk-icon="icon: google-plus"></a></li>
                        <li><a href="#" uk-icon="icon: facebook"></a></li>
                        <li><a href="#" uk-icon="icon: twitter"></a></li>
                        <li><a href="#" uk-icon="icon: instagram"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @include('layouts.navbar')
        </div>
    </div>
    </div>
    <div class="headBG glance"></div>
    <header class="hero">
        <div class="wrapper">
            <div>
                <div class="uk-light">
                    <h1 class="uk-text-bold">@yield('header')</h1>
                    <p class="lined--p">@yield('subheader')</p>
                </div>
            </div>
        </div>
    </header>
    <div class="smart--container" uk-grid>
        <div class="side--left uk-width-1-4@m">
            <div>
                <img src="{{ URL::asset('./assets/img/sidebar-img.png') }}" alt="">
            </div>
            <div class="list uk-margin-top">
                <h4>Local Government Area</h4>
                <ul class="uk-list uk-list-striped" style="padding-left: 0 !important">
                    <li><a href="{{ route('barkinladi') }}">Barkin Ladi</a></li>
                    <li><a href="{{ route('bassa') }}">Bassa </a></li>
                    <li><a href="{{ route('bokkos') }}">Bokkos </a></li>
                    <li><a href="{{ route('joseast') }}">Jos-East </a></li>
                    <li><a href="{{ route('josnorth') }}">Jos-North </a></li>
                    <li><a href="{{ route('jossouth') }}">Jos-South </a></li>
                    <li><a href="{{ route('kanam') }}">Kanam </a></li>
                    <li><a href="{{ route('kanke') }}">Kanke </a></li>
                    <li><a href="{{ route('langtangnorth') }}">Langtang North </a></li>
                    <li><a href="{{ route('langtangsouth') }}">Langtang South </a></li>
                    <li><a href="{{ route('mangu') }}">Mangu </a></li>
                    <li><a href="{{ route('mikang') }}">Mikang </a></li>
                    <li><a href="{{ route('pankshin') }}">Pankshin </a></li>
                    <li><a href="{{ route('quaanpan') }}">Qua'an Pan </a></li>
                    <li><a href="{{ route('riyom') }}">Riyom </a></li>
                    <li><a href="{{ route('shendam') }}">Shendam </a></li>
                    <li><a href="{{ route('wase') }}">Wase</a></li>
                </ul>
            </div>
        </div>    

        @yield('content')

        <div class="side--left uk-width-1-4@m">
            <div>
                <img src="{{ URL::asset('./assets/img/sidebar-img.png') }}" alt="">
            </div>
            <div class="list uk-margin-top">
                <h4>Photostream</h4>
                <div class="uk-child-width-1-2@m uk-grid-small" uk-grid uk-lightbox="animation: fade">
                    <div>
                        <a class="uk-inline" href="{{ URL::asset('./assets/img/pstr1.jpg') }}" >
                            <img src="{{ URL::asset('./assets/img/pstr1.jpg') }}" alt="ddf" width="800" height="600">
                        </a>
                    </div>
                    <div>
                        <a class="uk-inline" href="{{ URL::asset('./assets/img/pstr2.jpg') }}" >
                            <img src="{{ URL::asset('./assets/img/pstr2.jpg') }}" alt="dfd" width="800" height="600">
                        </a>
                    </div>
                    <div>
                        <a class="uk-inline" href="{{ URL::asset('./assets/img/pstr3.jpg') }}" >
                            <img src="{{ URL::asset('./assets/img/pstr3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a class="uk-inline" href="{{ URL::asset('./assets/img/pstr4.jpg') }}" >
                            <img src="{{ URL::asset('./assets/img/pstr4.jpg') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a class="uk-inline" href="{{ URL::asset('./assets/img/pstr5.jpg') }}" >
                            <img src="{{ URL::asset('./assets/img/pstr5.jpg') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a class="uk-inline" href="{{ URL::asset('./assets/img/pstr6.jpg') }}">
                            <img src="{{ URL::asset('./assets/img/pstr6.jpg') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a class="uk-inline" href="{{ URL::asset('./assets/img/pstr7.jpg') }}" >
                            <img src="{{ URL::asset('./assets/img/pstr7.jpg') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a class="uk-inline" href="{{ URL::asset('./assets/img/pstr8.jpg') }}">
                            <img src="{{ URL::asset('./assets/img/pstr8.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
    @include('layouts.footer')
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    <!-- <script src="{{ asset('js/share.js') }}"></script> -->
    @yield('scripts')
</body>
</html>