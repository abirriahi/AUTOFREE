<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auto-Store|@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}" />

    {!! Html::style('front/moteur/css/master.css') !!}
 {!! Html::style('front/moteur/css/home.css') !!}


            <!-- External CSS libraries -->
    {!! Html::style('front/css/bootstrap.min.css') !!}
    {!! Html::style('front/css/animate.min.css') !!}
    {!! Html::style('front/css/slider.css') !!}
    {!! Html::style('front/fonts/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('front/fonts/linearicons/style.css') !!}
    {!! Html::style('front/fonts/flaticon/font/flaticon.css') !!}
    {!! Html::style('front/css/bootstrap-select.min.css') !!}



    {!! Html::style('cus/sweetalert.css') !!}
            <!-- Custom stylesheet -->
    {!! Html::style('front/css/style.css') !!}
    {!! Html::style('front/css//colors/default.css') !!}

            <!-- Favicon icon -->
    <link rel="shortcut icon" href="front/img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! Html::style('front/css/ie10-viewport-bug-workaround.css') !!}



            <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    {!! Html::script('front/js/ie-emulation-modes-warning.js') !!}

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>


    <![endif]-->

</head>
<!-- Mirrored from auto-dealer-dot-my-experiments-163718.appspot.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 16:10:32 GMT -->

<body>
@yield('header')
        <!-- Header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ url('/') }}" class="logo">
                    <img src= {{  Request::root().'/front/img/logos/AUTO.png'}} alt="LOGO">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li class="dropdown">
                            <a href="{{ url('/register') }}" role="button" aria-haspopup="true" aria-expanded="false"> S’INSCRIRE </a>

                        </li>
                        <li class="dropdown">
                            <a href="{{ url('/login') }}" role="button" aria-haspopup="true" aria-expanded="false"> connexion </a>

                        </li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false"> {{ Auth::user()->name }}<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                               <li><a href="{{ url('/settings') }}"><i class="fa fa-btn fa-sign-out"></i> Paramètres </a></li>
                                @if(Auth::user()->admin==1  )
                                    <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-btn fa-sign-out"></i> Administration </a></li>


                                @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            </ul>

                        </li>

                    @endif
                    <li class="dropdown">
                        <a href="{{ url('/sell') }}" role="button" aria-haspopup="true" aria-expanded="false">Vendre</a>

                    </li>

                    <li class="dropdown">
                        <a href="" role="button" aria-haspopup="true" aria-expanded="false">Nous Contacter</a>

                    </li>




                </ul>

            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</header>
<!-- Header end -->

@yield('content')

        <!-- Footer start-->
<footer>
    <div class="container">
        <!-- Sub footer-->

        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <br>
                <table class="tab">
                    <tr>
                        <td width="45%">
                            <!-- About us -->
                            <div class="">
                                <div class="footer-item">
                                    <h2 class="title">Contacter Nous</h2>

                                    <ul class="personal-info">

                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            Adresse :<a href="#">{{getSetting('adresse')}}</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            Email:<a href="#">{{getSetting('email')}}</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            Bureau : <a href="#">{{getSetting('mobile')}}</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td width="37%">

                        </td>
                        <td width="45%">
                            <!-- About us -->
                            <div class="">
                                <div class="footer-item">
                                    <br> <br> <br>
                                    <h2 class="title"> Lien</h2>

                                    <ul  class="links">

                                        <li>

                                            <a href="{{url('/')}}">Accueil</a>
                                        </li>
                                        <li>

                                            <a href="{{url('/register')}}">S'inscrire</a>
                                        </li>
                                        <li>

                                            <a href=" {{url('/settings')}}">Mon compte</a>
                                        </li>
                                        <li>

                                            <a href="{{url('/magazine')}}">Magazine</a>
                                        </li>
                                        <li>

                                            <a href="#">Nous contacter</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </td>


                    </tr>
                </table>


            </div>

        </div>
    </div>
</footer>
<!-- Footer end-->

<!-- Copy right start-->
<div class="copy-right">
    <div class="container">
        <p>Copyright 2017. {{getSetting('droitedesite')}}</p>
    </div>
</div>




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