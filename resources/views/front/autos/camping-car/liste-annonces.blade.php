@extends('layouts.app')
@section('title')
    Bienvenue
    @endsection
    @section('header')

    @endsection
    @section('content')

        <!-- Favicon icon -->



    <!-- Header start -->
   <!-- Header end -->

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="overlay"  style="padding-bottom: 250px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-area">
                            <h2>PUB</h2>
                            <p> </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub banner end -->

    <!-- Car list start-->
    <div class="car-list content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <!-- Block heading Start-->
                    <div class="option-bar block-heading">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-5 cod-pad">
                                <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-caret-right icon-design"></i>
                                    <i class="fa fa-th-list"></i>
                                </span>
                                    Liste des annonces
                                </h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7 cod-pad">
                                <div class="sorting-options">

                                      </div>
                            </div>
                        </div>
                    </div>
                    <!-- Block heading end -->

                    <div class="clearfix"></div>

                    <!-- Car list start -->
                    @if(count($autos)  )
                        @foreach($autos->chunk(3) as $items )
                            @foreach($items as $autos  )

                        <div class="car-list-box clearfix wow fadeInUp delay-03s">
                         <div class=" row-table row-flush">





                                 <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12 car-pic">

                                @if( $autos->image !='' )
                                    <a href="{{ url('/detaille/'.$autos->id) }}">
                                        <img src={{checkIfImageIsexist($autos->image)}} alt="Image" height="100%" width="220">
                                    </a>
                                @elseif( $autos->image =='' )
                                    <a href="{{ url('/detaille/'.$autos->id) }}">


                                        <img src= {{  Request::root().'/slider/'.getSetting('no_image')}} alt="Image" height="100%" width="220"  >
                                    </a>
                                @endif


                            </div>










                            <!-- Detail Body -->
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 detail">
                                <!-- Header -->
                                <header>
                                    <div class="pull-left">
                                        <!-- Title -->
                                        <h3 class="title">
                                            <a href="car-details.html">{{$autos->new_marque}}</a>
                                        </h3>
                                        <!-- Custom List -->
                                        <ul class="custom-list">
                                            <li>
                                                <a href="#">New Car</a> /
                                            </li>
                                            <li>
                                                <a href="#">Automatic</a> /
                                            </li>
                                            <li>
                                                <a href="#">Sports</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Price -->
                                    <div class="price">
                                        <span>$42,605</span>
                                    </div>
                                </header>
                                <div class="clearfix"></div>
                                <!-- paragraph -->
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                </p>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-gasoline-pump"></i>
                                        <span>Gasoline</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-automatic-flash-symbol"></i>
                                        <span>Automatic</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-road-with-broken-line"></i>
                                        <span>12000</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-racing-flag"></i>
                                        <span>Sports Car </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-transport"></i>
                                        <span>5 Gears</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-time"></i>
                                        <span>2017</span>
                                    </li>
                                </ul>
                                <!-- Btn Div -->
                                <a href="car-details.html" class="btn btn-details">Details</a>
                            </div>

                            </div>

                    </div>
                                @endforeach
                    @endforeach
                    @endif


                            <!-- Car list end-->

                    <!-- Page navigation Start-->

                    <!-- Page navigation End-->
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <!-- Sidebar start-->
                    <div class="sidebar">
                        <aside class="sidebar-widget">
                            <h2 class="title">Pub</h2>
                        </aside>
                        <!-- end-->

                        <!-- Recent cars start-->
                        <div class="recent-car recent-cars sidebar-widget">
                            <!-- Title-->
                            <h2 class="title">Notre Selection</h2>
                            @if(count($selection)  )
                                @foreach($selection->chunk(3) as $items )

                                    <div class="media">
                                        @foreach($items as $autos  )

                                            <div class="media-left">
                                                @if( $autos->image !='' )

                                                    <a href="{{ url('/detaille/'.$autos->id) }}">
                                                        <img  src={{checkIfImageIsexist($autos->image)}}  >
                                                    </a>
                                                @elseif( $autos->image =='' )
                                                    <a href="{{ url('/detaille/'.$autos->id) }}">


                                                        <img src= {{  Request::root().'/public/'.getSetting('no_image')}} alt="Image"   >
                                                    </a>
                                                @endif

                                            </div>
                                            <div class="media-body">
                                                <h3>
                                                    <a href="{{ url('/detaille/'.$autos->id) }}">{{$autos->new_marque}} {{$autos->new_modele}}</a>
                                                </h3>
                                                <span>{{ date('M j, Y', strtotime($autos->created_at)) }}</span>
                                                <p>{{$autos->auto_price}} CHF</p>
                                            </div>

                                        @endforeach
                                    </div>

                                @endforeach
                            @endif

                        </div>
                        <!-- Recent cars end-->

                        <!-- Helping Start-->
                        <div class="helping-Center sidebar-widget" hidden>
                            <h2 class="title">Nous Contacter</h2>
                            <p>aaaaaa aaaa aa aaaaaaaa aaaaaa</p>
                            <ul class="contact-link">

                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+12-345-678-9091">
                                        +12-345-678-9091
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="mailto:sales@autocardealer.com">
                                        contact@autofree.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Helping End-->
                    </div>
                    <!-- Sidebar End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Car list end-->

    <!-- Footer start-->

    <!-- Footer end-->


    <!-- Copy right end-->

    <!-- Car Viedo Modal -->

    </body>

    <!-- Mirrored from auto-dealer-dot-my-experiments-163718.appspot.com/car-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 16:13:35 GMT -->
    </html>

@endsection