<!DOCTYPE html>
<html>

<!-- Mirrored from templines.rocks/html/sokolcov/auto-club/submit1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2017 11:17:21 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <title>Auto Club</title>

    <link rel="shortcut icon" type="image/x-icon" href="/public2/images/favicon.png" />
    {!! Html::style('public2/css/master.css') !!}


            <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="public2/assets/switcher/css/switcher.css" media="all" />




    {!! Html::style('public2/assets/switcher/css/color1.css', array('media' => 'all','title'=>'color1')) !!}

    {!! Html::style('public2/assets/switcher/css/color2.css', array('media' => 'all','title'=>'color2')) !!}
    {!! Html::style('public2/assets/switcher/css/color3.css', array('media' => 'all','title'=>'color3')) !!}

    {!! Html::style('public2/assets/switcher/css/color4.css', array('media' => 'all','title'=>'color4')) !!}

    {!! Html::style('public2/assets/switcher/css/color5.css', array('media' => 'all','title'=>'color5')) !!}

    {!! Html::style('public2/assets/switcher/css/color6.css', array('media' => 'all','title'=>'color6')) !!}
    <!--[if lt IE 9]>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="m-submit1" data-scrolling-animations="true">

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->
<!-- Start Switcher -->
<div class="switcher-wrapper">
    <div class="demo_changer">
        <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
        <div class="form_holder">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="predefined_styles">
                        <div class="skin-theme-switcher">
                            <h4>Color</h4>
                            <a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#f76d2b;"> </a>
                            <a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#de483d;"> </a>
                            <a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#228dcb;"> </a>
                            <a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#00bff3;"> </a>
                            <a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#2dcc70;"> </a>
                            <a href="#" data-switchcolor="color6" class="styleswitch" style="background-color:#6054c2;"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->

<header class="b-topBar wow slideInDown" data-wow-delay="0.7s">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="b-topBar__addr">
                    <span class="fa fa-map-marker"></span>
                    SOUSSE TUNISIE 4000
                </div>
            </div>
            <div class="col-md-2 col-xs-6">
                <div class="b-topBar__tel">
                    <span class="fa fa-phone"></span>
                    27-503-391
                </div>
            </div>
            @if (Auth::guest())
                <div class="col-md-4 col-xs-6">
                    <nav class="b-topBar__nav">
                        <ul>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>

                        </ul>
                    </nav>
                </div>
            @else
                <div class="col-md-4 col-xs-6">
                    <nav class="b-topBar__nav">

                    </nav>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="b-topBar__lang">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle='dropdown'>{{ Auth::user()->name }}</a>
                            <a class="m-langLink dropdown-toggle" data-toggle='dropdown' href="#"><span class="spinner"></span><span class="fa fa-caret-down"></span></a>
                            <ul class="dropdown-menu h-lang">
                                <li><a class="m-langLink dropdown-toggle" href="home-2.html">Mes annonces</a></li>
                                <li><a class="m-langLink dropdown-toggle"  href="{{ url('/settings') }}">Paramètres</a></li>
                                <li><a class="m-langLink dropdown-toggle"  href="{{ url('/logout') }}">Logout</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</header><!--b-topBar-->

<nav class="b-nav">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-4">
                <div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
                    <h3><a href="{{url('/')}}">Auto<span>Free</span></a></h3>
                    <h2><a href="{{url('/')}}"></a></h2>
                </div>
            </div>
            <div class="col-sm-9 col-xs-8">
                <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-main-slide" id="nav">
                        <ul class="navbar-nav-menu">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle='dropdown' href="home.html">Acceuil <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu h-nav">
                                    <li><a href="{{url('/')}}">Acceuil 1</a></li>
                                    <li><a href="{{url('/')}}">Acceuil 2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle='dropdown' href="#">exemple <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu h-nav">
                                    <li><a href="listings.html">listing 1</a></li>
                                    <li><a href="listingsTwo.html">listing 2</a></li>
                                    <li><a href="listTable.html">listing 3</a></li>
                                    <li><a href="listTableTwo.html">listing 4</a></li>
                                </ul>
                            </li>
                            <li><a href="compare.html">compare</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="article.html">Services</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle='dropdown' href="#">Blog <span class="fa fa-caret-down"></span></a>
                                <ul class="dropdown-menu h-nav">
                                    <li><a href="blog.html">Blog 1</a></li>
                                    <li><a href="blogTwo.html">Blog 2</a></li>
                                    <li><a href="404.html">Page 404</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/sell')}}">poser votre annanonce</a></li>
                            <li><a href="contacts.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav><!--b-nav-->





@yield('content')

<div class="m-home">
    <div class="b-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <aside class="b-info__aside wow zoomInLeft" data-wow-delay="0.5s">
                        <article class="b-info__aside-article">
                            <h3>OPENING HOURS</h3>
                            <div class="b-info__aside-article-item">
                                <h6>Sales Department</h6>
                                <p>Mon-Sat : 8:00am - 5:00pm<span>&middot;</span>
                                    Sunday is closed</p>
                            </div>
                            <div class="b-info__aside-article-item">
                                <h6>Service Department</h6>
                                <p>Mon-Sat : 8:00am - 5:00pm<span>&middot;</span>
                                    Sunday is closed</p>
                            </div>
                        </article>
                        <article class="b-info__aside-article">
                            <h3>About us</h3>
                            <p>Vestibulum varius od lio eget conseq
                                uat blandit, lorem auglue comm lodo
                                nisl non ultricies lectus nibh mas lsa
                                Duis scelerisque aliquet. Ante donec
                                libero pede porttitor dacu msan esct
                                venenatis quis.</p>
                        </article>
                    </aside>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="b-info__latest">
                        <h3 class=" wow zoomInUp" data-wow-delay="0.5s">LATEST AUTOS</h3>
                        <div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.5s">
                            <div class="b-info__latest-article-photo m-audi"></div>
                            <div class="b-info__latest-article-info">
                                <h6><a href="detail.html">MERCEDES-AMG GT S</a></h6>
                                <div class="b-featured__item-links m-auto">
                                    <a href="#">Used</a>
                                    <a href="#">2014</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Orange</a>
                                    <a href="#">Petrol</a>
                                </div>
                                <p><span class="fa fa-tachometer"></span> 35,000 KM</p>
                            </div>
                        </div>
                        <div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.5s">
                            <div class="b-info__latest-article-photo m-audiSpyder"></div>
                            <div class="b-info__latest-article-info">
                                <h6><a href="detail.html">AUDI R8 SPYDER V-8</a></h6>
                                <div class="b-featured__item-links m-auto">
                                    <a href="#">Used</a>
                                    <a href="#">2014</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Orange</a>
                                    <a href="#">Petrol</a>
                                </div>
                                <p><span class="fa fa-tachometer"></span> 35,000 KM</p>
                            </div>
                        </div>
                        <div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.5s">
                            <div class="b-info__latest-article-photo m-aston"></div>
                            <div class="b-info__latest-article-info">
                                <h6><a href="detail.html">ASTON MARTIN VANTAGE</a></h6>
                                <div class="b-featured__item-links m-auto">
                                    <a href="#">Used</a>
                                    <a href="#">2014</a>
                                    <a href="#">Manual</a>
                                    <a href="#">Orange</a>
                                    <a href="#">Petrol</a>
                                </div>
                                <p><span class="fa fa-tachometer"></span> 35,000 KM</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <address class="b-info__contacts wow zoomInUp" data-wow-delay="0.5s">
                        <p>contact us</p>
                        <div class="b-info__contacts-item">
                            <span class="fa fa-map-marker"></span>
                            <em>202 W 7th St, Suite 233 Los Angeles,<br />
                                California 90014 USA</em>
                        </div>
                        <div class="b-info__contacts-item">
                            <span class="fa fa-phone"></span>
                            <em>Phone:  1-800- 624-5462</em>
                        </div>
                        <div class="b-info__contacts-item">
                            <span class="fa fa-fax"></span>
                            <em>FAX:  1-800- 624-5462</em>
                        </div>
                        <div class="b-info__contacts-item">
                            <span class="fa fa-envelope"></span>
                            <em>Email:  info@domain.com</em>
                        </div>
                    </address>
                    <address class="b-info__map">
                        <a href="contacts.html">Open Location Map</a>
                    </address>
                </div>
            </div>
        </div>
    </div><!--b-info-->

    <footer class="b-footer">
        <a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="b-footer__company wow zoomInLeft" data-wow-delay="0.5s">
                        <div class="b-nav__logo">
                            <h3><a href="home.html">Auto<span>Club</span></a></h3>
                        </div>
                        <p>&copy; 2015 Designed by Templines &amp; Powered by WordPress.</p>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="b-footer__content wow zoomInRight" data-wow-delay="0.5s">
                        <div class="b-footer__content-social">
                            <a href="#"><span class="fa fa-facebook-square"></span></a>
                            <a href="#"><span class="fa fa-twitter-square"></span></a>
                            <a href="#"><span class="fa fa-google-plus-square"></span></a>
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-youtube-square"></span></a>
                            <a href="#"><span class="fa fa-skype"></span></a>
                        </div>
                        <nav class="b-footer__content-nav">
                            <ul>
                                <li><a href="home.html">Home</a></li>
                                <li><a href="404.html">Pages</a></li>
                                <li><a href="listings.html">Inventory</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="404.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="listTable.html">Shop</a></li>
                                <li><a href="contacts.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--b-footer-->
</div>
<!--Main-->


{!! Html::script('public2/js/jquery-1.11.3.min.js') !!}

{!! Html::script('public2/js/jquery-ui.min.js') !!}

{!! Html::script('public2/js/bootstrap.min.js') !!}


{!! Html::script('public2/js/modernizr.custom.js') !!}


{!! Html::script('public2/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js') !!}

{!! Html::script('public2/js/waypoints.min.js') !!}

{!! Html::script('public2/js/jquery.easypiechart.min.js') !!}

{!! Html::script('public2/js/classie.js') !!}

        <!--Switcher-->

{!! Html::script('public2/assets/switcher/js/switcher.js') !!}
        <!--Owl Carousel-->

{!! Html::script('public2/assets/owl-carousel/owl.carousel.min.js') !!}
        <!--bxSlider-->

{!! Html::script('public2/assets/bxslider/jquery.bxslider.js') !!}
        <!-- jQuery UI Slider -->

{!! Html::script('public2/assets/slider/jquery.ui-slider.js') !!}

        <!--Theme-->

{!! Html::script('public2/js/jquery.smooth-scroll.js') !!}

{!! Html::script('public2/js/wow.min.js') !!}

{!! Html::script('public2/js/jquery.placeholder.min.js') !!}

{!! Html::script('public2/js/theme.js') !!}




{!! Html::script('cus/sweetalert.min.js')!!}
@include('/layouts/message')
@yield('footer')
</body>
<!-- Mirrored from templines.rocks/html/sokolcov/auto-club/submit1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2017 11:17:21 GMT -->
</html>