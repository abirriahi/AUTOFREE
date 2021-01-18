<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>AutoStore Admin Panel|@yield('title') </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    {!! Html::style('backend/assets/plugins/bootstrap/css/bootstrap.css') !!}
    {!! Html::style('backend/assets/css/main.css') !!}
    {!! Html::style('backend/assets/css/theme.css') !!}
    {!! Html::style('backend/assets/css/MoneAdmin.css') !!}
    {!! Html::style('backend/assets/plugins/Font-Awesome/css/font-awesome.css') !!}


    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    {!! Html::style('backend/assets/css/layout2.css') !!}

    {!! Html::style('backend/assets/plugins/flot/examples/examples.css') !!}


    {!! Html::style('backend/assets/plugins/timeline/timeline.css') !!}


    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="padTop53 " >

<!-- MAIN WRAPPER -->
<div id="wrap" >


    <!-- HEADER SECTION -->
    <div id="top">

        <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
            <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                <i class="icon-align-justify"></i>
            </a>
            <!-- LOGO SECTION -->
            <header class="navbar-header">

                <a href="{{url('/')}}" class="navbar-brand">
                    <img src="{{Request::root().'/backend/assets/img/AUTO - Copie.png'}}" alt="" />

                </a>
            </header>
            <!-- END LOGO SECTION -->
            <ul class="nav navbar-top-links navbar-right">

                <!-- MESSAGES SECTION -->

                <!--END MESSAGES SECTION -->

                <!--TASK SECTION -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="label label-danger">5</span>   <i class="icon-tasks"></i>&nbsp; <i class="icon-chevron-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong> Profile </strong>
                                          </p>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>

                    </ul>

                </li>
                <!--END TASK SECTION -->

                <!--ALERTS SECTION -->
                <!-- END ALERTS SECTION -->

                <!--ADMIN SETTINGS SECTIONS -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                    </a>

                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="icon-user"></i> User Profile </a>
                        </li>
                        <li><a href="#"><i class="icon-gear"></i> Settings </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
                        </li>
                    </ul>

                </li>
                <!--END ADMIN SETTINGS -->
            </ul>

        </nav>

    </div>
    <!-- END HEADER SECTION -->



    <!-- MENU SECTION -->
    <!-- MENU SECTION -->
    <div id="left" >
        <div class="media user-media well-small">
            <a class="user-link" href="{{url('/adminpanel')}}">
                <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{Request::root().'/backend/assets/img/user.gif'}}" />
            </a>
            <br />
            <div class="media-body">
                <h5 class="media-heading">{{ Auth::user()->name }}</h5>
                <ul class="list-unstyled user-info">

                    <li>
                        <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online

                    </li>

                </ul>
            </div>
            <br />
        </div>

        <ul id="menu" class="collapse">


            <li class="panel active">
                <a href="{{url('/adminpanel')}}" >
                    <i class="icon-table"></i> Acceuil


                </a>
            </li>



            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                    <i class="icon-tasks"> </i> LISTE Of Annoncements

                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; &nbsp;
                </a>
                <ul class="collapse" id="component-nav">

                    <li class=""><a href="{{url('/adminpanel/annonce/')}}"><i class="icon-angle-right"></i> Voiture </a></li>


                    <li class=""><a href="{{url('/adminpanel')}}"><i class="icon-angle-right"></i>Moto</a></li>
                    <li class=""><a href="{{url('/adminpanel')}}"><i class="icon-angle-right"></i> Camion </a></li>
                    <li class=""><a href="{{url('/adminpanel')}}"><i class="icon-angle-right"></i> Camping </a></li>
                    <li class=""><a href="{{url('/adminpanel')}}"><i class="icon-angle-right"></i> Remorque </a></li>
                    <li class=""><a href="{{url('/adminpanel')}}"><i class="icon-angle-right"></i> Vahicule-utilitaire </a></li>
                  </ul>
            </li>
            <li class="panel ">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                    <i class="icon-pencil"></i> Nos Clients

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-success">5</span>&nbsp;
                </a>
                <ul class="collapse" id="form-nav">
                    <li class=""><a href="{{url('/adminpanel/user/')}}"><i class="icon-angle-right"></i> Liste of users </a></li>
                  </ul>
            </li>

            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                    <i class="icon-table"></i> Site Setting

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; &nbsp;
                </a>
                <ul class="collapse" id="pagesr-nav">
                    <li><a href="pages_calendar.html"><i class="icon-angle-right"></i> Setting </a></li>
                   </ul>
            </li>
            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                    <i class="icon-bar-chart"></i>  Panneaux

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-danger">4</span>&nbsp;
                </a>
                <ul class="collapse" id="chart-nav">



                    <li><a href="charts_line.html"><i class="icon-angle-right"></i> liste of panneau </a></li>
                    <li><a href="charts_bar.html"><i class="icon-angle-right"></i> Add panneau</a></li>
                    </ul>
            </li>

            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                    <i class="icon-bar-chart"></i>  Magazine

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-danger">4</span>&nbsp;
                </a>
                <ul class="collapse" id="chart-nav">



                      <li><a href="charts_bar.html"><i class="icon-angle-right"></i> Add magazin</a></li>
                </ul>
            </li>
            <li class="panel">
                <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                    <i class="icon-bar-chart"></i>  Slider

                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    &nbsp; <span class="label label-danger">4</span>&nbsp;
                </a>
                <ul class="collapse" id="chart-nav">



                      <li><a href="charts_bar.html"><i class="icon-angle-right"></i> Add slider</a></li>
                </ul>
            </li>


        </ul>

    </div>
    <!--END MENU SECTION -->


    <!--END MENU SECTION -->



    <!--PAGE CONTENT -->
    @yield('content')

            <!--END PAGE CONTENT -->

    <!-- RIGHT STRIP  SECTION -->
    <div >





    </div>
    <!-- END RIGHT STRIP  SECTION -->
</div>
{!! Html::script('backend/plugins/jQuery/jQuery-2.1.4.min.js') !!}

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
{!! Html::script('backend/assets/plugins/flot/jquery.flot.js') !!}


{!! Html::script('backend/assets/plugins/flot/jquery.flot.resize.js') !!}


{!! Html::script('backend/assets/plugins/flot/jquery.flot.time.js') !!}

{!! Html::script('backend/assets/plugins/flot/jquery.flot.stack.js') !!}
{!! Html::script('backend/bootstrap/js/bootstrap.min.js') !!}


{!! Html::script('backend/assets/plugins/jquery-2.0.3.min.js') !!}
{!! Html::script('backend/assets/plugins/bootstrap/js/bootstrap.min.js') !!}


{!! Html::script('backend/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js') !!}


        <!-- END GLOBAL SCRIPTS -->


<!-- PAGE LEVEL SCRIPTS -->


{!! Html::script('backend/assets/js/for_index.js') !!}

@yield('footer')


<!-- END PAGE LEVEL SCRIPTS -->


</body>

<!-- END BODY -->
</html>
