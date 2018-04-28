<!DOCTYPE html>
<html lang="en">
@php
    $cates = App\Category::where('parent_id', 0)->get();
    $cate_child = App\Category::where('parent_id','>', 0)->get();
@endphp


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Blog Home 2</title>

    <!--common style-->
    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="assets/vendor/elasic-slider/elastic.css">
    <link rel="stylesheet" href="assets/vendor/iconmoon/linea-icon.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/shortcodes.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/default-theme.css">

</head>

<body>

    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->


    <div class="wrapper">

        <!--header start-->
        <header class="l-header l-header_overlay">

            <div class="l-navbar l-navbar_expand l-navbar_t-light-trans js-navbar-sticky">
                <div class="container-fluid">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                        <!--logo start-->
                        <a href="{{ route('web.index') }}" class="logo-brand">
                            <img class="retina" src="assets/img/logo.png" alt="Massive">
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                            @foreach ($cates as $cate)                            
                            <li class=""><a href="#">{{ $cate->name }}</a>
                                <ul class="dropdown">
                                    @foreach ($cate_child as $value)                                   
                                    <li><a href="#">{{ $value->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                        <!--mega menu end-->

                    </nav>
                </div>
            </div>

        </header>
        <!--header end-->

        <!--page title start-->
        <section class="page-title parallax-title ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase">Massive Blog Post</h4>
                        <span>Latest Awesome post</span>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->

        <!--body content start-->
        <section class="body-content ">

            <div class="page-content">
                @yield('body')
            </div>


        </section>
        <!--body content end-->

        <!--footer start 1-->
        <footer id="footer" class="dark">
            <div class="primary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="m-bot-20 footer-logo">
                                <img class="retina" src="assets/img/logo-dark.png" alt="" />
                            </a>
                            <p>Massive is fully responsible, performance oriented and SEO optimized, retina ready WordPress theme.</p>

                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">recent posts</h5>
                            <ul class="f-list">
                                <li><a href="#">Standard Blog post</a>
                                </li>
                                <li><a href="#">Quotation post</a>
                                </li>
                                <li><a href="#">Audio Post</a>
                                </li>
                                <li><a href="#">Massive Video Demo</a>
                                </li>
                                <li><a href="#">Blog Image Post</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">quick link</h5>
                            <ul class="f-list">
                                <li><a href="#">About Massive</a>
                                </li>
                                <li><a href="#">Career</a>
                                </li>
                                <li><a href="#">Terms & Condition</a>
                                </li>
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="text-uppercase">Recent Work</h5>
                            <ul class="r-work">
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/1.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/2.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/3.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/4.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/5.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/6.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/7.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/recent-work/8.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="secondary-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="m-top-10">Copyright 2012 - 2015 Massive Theme by <a href="http://themebucket.net/" class="f-link" target="_blank">ThemeBucket</a> | All Rights Reserved</span>
                        </div>
                        <div class="col-md-6">
                            <div class="social-link circle pull-right">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer 1 end-->

    </div>


    <!-- inject:js -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>
    <script src="assets/vendor/jquery/jquery-1.10.2.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootstrap-validator/validator.min.js"></script>
    <script src="assets/vendor/breakpoint/breakpoint.js"></script>
    <script src="assets/vendor/count-to/jquery.countTo.js"></script>
    <script src="assets/vendor/countdown/jquery.countdown.js"></script>
    <script src="assets/vendor/easing/jquery.easing.1.3.js"></script>
    <script src="assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/elasic-slider/jquery.eislideshow.js"></script>
    <script src="assets/vendor/flex-slider/jquery.flexslider-min.js"></script>
    <script src="assets/vendor/gmap/jquery.gmap.min.js"></script>
    <script src="assets/vendor/images-loaded/imagesloaded.js"></script>
    <script src="assets/vendor/isotope/jquery.isotope.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/mailchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendor/menuzord/menuzord.js"></script>
    <script src="assets/vendor/nav/jquery.nav.js"></script>
    <script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/parallax-js/parallax.min.js"></script>
    <script src="assets/vendor/smooth/smooth.js"></script>
    <script src="assets/vendor/sticky/jquery.sticky.min.js"></script>
    <script src="assets/vendor/touchspin/touchspin.js"></script>
    <script src="assets/vendor/typist/typist.js"></script>
    <script src="assets/vendor/visible/visible.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- endinject -->
</body>


<!-- Mirrored from massive.markup.themebucket.net/mp-index-blog-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2017 04:49:51 GMT -->
</html>
