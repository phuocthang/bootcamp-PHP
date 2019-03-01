<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Force Magazine</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('vendors/lightbox/simpleLightbox.css') }} ">
        <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }} ">
        <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }} ">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">
    </head>
    <body>
     @include('layout.head')
        <!--================Header Menu Area =================-->
        <section class="home_banner_area">
                <div class="banner_inner d-flex align-items-center">
                    <div class="container">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="banner_content text-center">
                                        <div class="date">
                                            <a class="gad_btn" href="#">Gadgets</a>
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                        <h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="banner_content text-center">
                                        <div class="date">
                                            <a class="gad_btn" href="#">Gadgets</a>
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                        <h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="banner_content text-center">
                                        <div class="date">
                                            <a class="gad_btn" href="#">Gadgets</a>
                                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                        <h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================End Home Banner Area =================-->
       @yield('content')
        
        <!--================ start footer Area  =================-->	
     @include('layout.footer')
		<!--================ End footer Area  =================-->
        
        
        @stack('script')
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        @stack('script')
        <script src="{{ asset('js/jquery-3.2.1.min.js') }} "></script>
        <script src=" {{ asset('js/popper.js') }} "></script>
        <script src="{{ asset('js/bootstrap.min.js') }} "></script>
        <script src="{{ asset('js/stellar.js') }} "></script>
        <script src="{{ asset('vendors/lightbox/simpleLightbox.min.js') }} "></script>
        <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }} "></script>
        <script src="{{ asset('vendors/isotope/imagesloaded.pkgd.min.js') }} "></script>
        <script src="{{ asset('vendors/isotope/isotope-min.js') }} "></script>
        <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }} "></script>
        <script src="{{ asset('vendors/jquery-ui/jquery-ui.js"') }} "></script>
        <script src="{{ asset('js/jquery.ajaxchimp.min.js') }} "></script>
        <script src="{{ asset('js/mail-script.js') }} "></script>
        <script src="{{ asset('js/theme.js') }} "></script>
    </body>
</html>