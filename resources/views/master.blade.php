<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}">
    <!-- Title -->
    <title>Wedding Planner | @yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('public/frontend/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon"
        type="image/x-icon" />
    <link href="i{{ asset('public/frontend/mages/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div id="preloader" class="preloader">
            <div id="pre" class="preloader_container">
                <div class="preloader_disabler"></div>
            </div>
        </div>

        <!-- Header Styles -->
        <header class="header-nav">
            <div class="main-header-nav navbar-scrolltofixed" style="height:10%">
                <div class="container ulockd-pdng0">
                    <nav class="navbar navbar-default bootsnav menu-style1">
                        <div class="container">
                            <!-- Start Atribute Navigation -->
                            <!--  -->
                            <!-- End Atribute Navigation -->

                            <!-- Start Header Navigation -->
                            <div class="navbar-header">
                                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#navbar-menu">
                                    <i class="fa fa-bars"></i>
                                </button> -->
                                <a class="navbar-brand ulockd-main-logo2" href="{{ URL::to('/') }}">
                                    <img src="{{ asset('public/images/Wedding_planner.png') }}"
                                        class="logo logo-scrolled" alt="">
                                </a>
                            </div>
                            <!-- End Header Navigation -->
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <!-- /.navbar-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        @yield('content')

        <!-- Our Footer -->
        <section class="ulockd-footer2" style="padding: 5px !important;border-bottom: 1px solid #e2dbd7;position: fixed;z-index: 9999;bottom: 0px;background: white;width: 100%;">
            <div class="container">
                <div class="row">
                    <a href="#"><div class="col-xxs-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" style="text-align: center;">
                        <i class="fa fa-calendar"></i>
                    </div></a>
                    <a href="{{ URL::to('/') }}"><div class="col-xxs-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" style="text-align: center;">
                        <i class="fa fa-home"></i>
                    </div></a>
                    <a href="#"><div class="col-xxs-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" style="text-align: center;">
                        <i class="fa fa-bell"></i>
                    </div></a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><div class="col-xxs-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" style="text-align: center;">
                        <i class="fa fa-sign-out"></i>
                    </div></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </section>

        <!-- Our CopyRight Section -->
        <!-- <section class="ulockd-copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="color-white">Copyright © 2019 All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <a class="scrollToHome ulockd-bgthm" href="#"><i class="fa fa-home"></i></a> -->
    </div>

    <!-- Wrapper End -->
    <script type="text/javascript" src="{{ asset('public/frontend/js/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/bootstrap.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/bootsnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/parallax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/scrollto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/jquery-scrolltofixed-min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/jquery.counterup.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/gallery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/video-player.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/jflickrfeed.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/jquery.barfiller.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/timepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/frontend/js/tweetie.js') }}"></script>
    <!-- Custom script for all pages -->
    <script type="text/javascript" src="{{ asset('public/frontend/js/script.js') }}"></script>
</body>

</html>