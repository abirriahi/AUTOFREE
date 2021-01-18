@extends('layouts.app')
@section('title')
    Inscription
@endsection
@section('header')
    <head>
        <title>AUTO-STORE|@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="csrf_token" content="{{ csrf_token() }}" />


        {!! Html::style('front/moteur/css/master.css') !!}

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

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- form content box Start -->
                <div class="form-content-box">
                    <!-- header -->
                    <div class="header">
                        <h3>S’identifier</h3>
                    </div>
                    <!-- Details -->
                    <div class="Details">
                        <!-- form -->
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" class="input-text" id="email-eddress" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" name="password" class="input-text" id="password" placeholder="Mot de Passe">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label>
                                        <input type="checkbox" class="ez-hide">
                                        Se souvenir de moi
                                    </label>
                                </div>
                                <a href="{{ url('/password/reset') }}" class="link-not-important pull-right">Informations de compte oubliées</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-submit">Connexion</button>
                            </div>
                        </form>
                        <hr>
                        <!-- Social list 2 -->

                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            <a href="{{url('/register')}}">Inscription</a>
                        </span>
                    </div>
                </div>
                <!-- Form content box End -->
            </div>
        </div>
    </div>

@endsection
@section('hjj')
    <section class="b-search">
        <div class="container">
            <form class="b-search__main" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
            <div class="b-search__main-title wow zoomInUp" data-wow-delay="0.3s">
                <h2>Connexion</h2>
            </div>
            <div class="b-search__main-form wow zoomInUp" data-wow-delay="0.3s">
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="m-firstSelects">
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">
                                <div class="header">
                                    <h3>Login</h3>
                                </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" class="input-text" id="email-eddress" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                                </div>
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

                            </div>
                        </div>
                        <div class="m-secondSelects">
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

                            </div>

                            <div class="col-xs-4">
                                <div class="header">
                                    <h3>Mot de passe</h3>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input type="password" name="password" class="input-text" id="password" placeholder="Mot de Passe">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-xs-4">

                            </div><div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

                            </div>
                        </div>
                        <div class="m-secondSelects">
                            <div class="col-xs-4">

                            </div>
                            <div class="col-xs-4">

                            </div>

                            <div class="col-xs-4">


                            </div>

                            <div class="col-xs-4">
                                <div class="checkbox">
                                    <div class="ez-checkbox pull-left">
                                        <label>
                                            <input type="checkbox" class="ez-hide">
                                            Se souvenir de moi
                                        </label>
                                    </div>
                                    <a href="{{ url('/password/reset') }}" class="link-not-important pull-right">Informations de compte oubliées</a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-submit">Connexion</button>
                                </div>



                            </div>
                        </div>

                    </div>
                     </div>
            </div>


            </form>
            </div>


    </section>
    @endsection


    @section('script')
    {!! Html::script('front/js/jquery-2.2.0.min.js') !!}
    {!! Html::script('front/js/bootstrap.min.js') !!}
    {!! Html::script('front/js/bootstrap-slider.js') !!}
    {!! Html::script('front/js/wow.min.js') !!}
    {!! Html::script('front/js/jquery.scrollUp.js') !!}
    {!! Html::script('front/js/bootstrap-select.min.js') !!}
    {!! Html::script('front/js/ie10-viewport-bug-workaround.js') !!}
    {!! Html::script('front/js/app.js') !!}


    {!! Html::script('front/moteur/js/jquery-1.11.3.min.js') !!}
    {!! Html::script('front/moteur/js/jquery-ui.min.js') !!}
    {!! Html::script('front/moteur/js/bootstrap.min.js') !!}
    {!! Html::script('front/moteur/js/modernizr.custom.js') !!}


    {!! Html::script('front/moteur/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js') !!}
    {!! Html::script('front/moteur/js/waypoints.min.js') !!}
    {!! Html::script('front/moteur/js/jquery.easypiechart.min.js') !!}
    {!! Html::script('front/moteur/js/classie.js') !!}


    {!! Html::script('front/moteur/assets/switcher/js/switcher.js') !!}
    {!! Html::script('front/moteur/assets/owl-carousel/owl.carousel.min.js') !!}
    {!! Html::script('front/moteur/assets/bxslider/jquery.bxslider.js') !!}
    {!! Html::script('front/moteur/assets/slider/jquery.ui-slider.js') !!}


    {!! Html::script('front/moteur/js/jquery.smooth-scroll.js') !!}
    {!! Html::script('front/moteur/js/wow.min.js') !!}
    {!! Html::script('front/moteur/js/jquery.placeholder.min.js') !!}
    {!! Html::script('front/moteur/js/theme.js') !!}

            <!--Theme-->

    <!--///M
            <!-- Custom javascript -->
@endsection