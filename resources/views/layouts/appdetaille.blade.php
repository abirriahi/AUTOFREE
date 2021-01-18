<!DOCTYPE html>
<html lang="en">
<head>
    <title>AUTO-STORE|@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}" />



            <!-- External CSS libraries -->
    {!! Html::style('front/css/bootstrap.min.css') !!}


    {!! Html::style('front/fonts/font-awesome/css/font-awesome.min.css') !!}

    {!! Html::style('front/fonts/flaticon/font/flaticon.css') !!}
    {!! Html::style('front/css/bootstrap-select.min.css') !!}



    {!! Html::style('cus/sweetalert.css') !!}
            <!-- Custom stylesheet -->
    {!! Html::style('front/css/style.css') !!}
    {!! Html::style('front/css//colors/default.css') !!}
    <link rel="shortcut icon" href="front/img/favicon.ico" type="image/x-icon">

    <!-- Favicon icon -->

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
                <a href="{{ url('/') }}" class="logo" >
                    <img src= {{  Request::root().'/front/img/logos/AUTO.png'}}>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li class="dropdown">
                            <a href="{{url('/register')}}"  role="button" aria-haspopup="true" aria-expanded="false"> S’INSCRIRE </a>

                        </li>
                        <li class="dropdown">
                            <a href="{{ url('/login') }}" role="button" aria-haspopup="true" aria-expanded="false"> connexion </a>

                        </li>

                    @else
                        <li class="dropdown">


                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">
                                @if( Auth::user()->sex ==1 )

                                    Mr
                                @else
                                    Mme
                                @endif
                                {{ Auth::user()->name }}


                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/settings') }}"> Paramètres </a></li>
                                @if(Auth::user()->admin==1  )
                                    <li><a href="{{ url('/adminpanel') }}"> Administration </a></li>


                                @endif
                                <li><a href="{{ url('/logout') }}"> Déconnexion</a></li>
                            </ul>

                        </li>

                    @endif
                    <li class="dropdown">
                        <a href="{{ url('/sell') }}" role="button" aria-haspopup="true" aria-expanded="false">Vendre</a>

                    </li>

                    <li class="dropdown">
                        <a href="{{url('/contactUs')}}" role="button" aria-haspopup="true" aria-expanded="false"> Contacter Nous</a>

                    </li>


                    <li>
                        <div class="form-group">
                            <select id="selectbasic" name="selectbasic" class="form-control"  style="text-color:#d20023">
                                <option  value="Fr">Fr</option>
                                <option value="En">En</option>
                                <option value="De">De</option>
                                <option value="It">It</option>
                            </select>

                        </div>

                    </li>

                </ul>

            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <img src="{{  Request::root().'/front/img/logos/AUTO.png'}}" name="aboutme" width="140" height="140" border="0" class="img"></center>

                        <h3 class="text-center title-1"><b> Vous êtes ?</b></h3>
                        <center>

                            <p>



                                <a class="btn btn-info" href="{{ url('/register') }}">   Professionnel    </a>
                                <br><br>
                                <a class="btn btn-info" href="{{ url('/register') }}"> Particulier </a>



                            </p>
                        </center>

                    </div>



                </div>

            </div>
        </div>

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
<!-- Copy right end-->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! Html::script('front/js/jquery-2.2.0.min.js') !!}

{!! Html::script('front/js/bootstrap.min.js') !!}
{!! Html::script('front/js/bootstrap-slider.js') !!}
{!! Html::script('front/js/wow.min.js') !!}
{!! Html::script('front/js/jquery.scrollUp.js') !!}
{!! Html::script('front/js/bootstrap-select.min.js') !!}

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! Html::script('front/js/ie10-viewport-bug-workaround.js') !!}

<!-- Custom javascript -->
{!! Html::script('front/js/app.js') !!}
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-89110077-2', 'auto');
    ga('send', 'pageview');

</script>






{!! Html::script('cus/sweetalert.min.js')!!}
@include('/layouts/message')
@yield('footer')
</body>

<!-- Mirrored from auto-dealer-dot-my-experiments-163718.appspot.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 16:12:29 GMT -->
</html>