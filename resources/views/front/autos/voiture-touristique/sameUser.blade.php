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
        <div class="overlay" style="padding-bottom: 250px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-area">
                            pub
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
                    @if(count($same_user)  )
                        @foreach($same_user->chunk(3) as $items )
                            @foreach($items as $same_user  )

                                <div class="car-list-box clearfix wow fadeInUp delay-03s">
                                    <div class=" row-table row-flush">





                                        <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12 car-pic">

                                            @if( $same_user->image !='' )
                                                <a href="{{ url('/detaille/'.$same_user->id) }}">
                                                    <img src={{checkIfImageIsexist($same_user->image)}} alt="Image" height="100%" width="220">
                                                </a>
                                            @elseif( $same_user->image =='' )
                                                <a href="{{ url('/detaille/'.$same_user->id) }}">


                                                    <img src= {{  Request::root().'/public/slider/'.getSetting('no_image')}} alt="Image" height="100%" width="220"  >
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
                                                        <a href="{{ url('/detaille/'.$same_user->id) }}">
                                                            {{$same_user->new_marque}}

                                                            {{$same_user->new_modele}} </a>
                                                    </h3>
                                                    <!-- Custom List -->
                                                    <ul class="custom-list">
                                                        <li>
                                                            <a href="#">

                                                                @if($same_user->auto_categorie!='')

                                                                    {{  categorie()[$same_user->auto_categorie] }}
                                                                @else
                                                                @endif

                                                            </a> /
                                                        </li>
                                                        <li>
                                                            <a href="#">


                                                                @if($same_user->auto_vitesse!='')

                                                                    {{  auto_vitesse()[$same_user->auto_vitesse] }}
                                                                @else
                                                                @endif

                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <!-- Price -->
                                                <div class="price">
                                        <span> @if($same_user->auto_price!='')

                                                {{  $same_user->auto_price }} CHF
                                            @else
                                            @endif
                                        </span>
                                                </div>
                                            </header>
                                            <div class="clearfix"></div>
                                            <!-- paragraph -->
                                            <?php
                                            $text =  $same_user->auto_description ;
                                            $newtext = wordwrap($text, 65, "<br />", true);

                                            echo "$newtext\n". "...";
                                            ?>


                                            <ul class="facilities-list clearfix">
                                                <li>
                                                    <i class="flaticon-gasoline-pump"></i>
                                        <span> @if($same_user->auto_carburan!='')


                                                {{auto_carburan()[$same_user->auto_carburan]}}
                                            @else
                                            @endif
                                         </span>
                                                </li>

                                                <li>
                                                    <i class="flaticon-automatic-flash-symbol"></i>
                                        <span>@if($same_user->transmission!='')


                                                {{Transmission()[$same_user->transmission]}}
                                            @else
                                                Automatic
                                            @endif</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-road-with-broken-line"></i>
                                        <span>@if($same_user->auto_km!='')

                                                {{km()[$same_user->auto_km]}}

                                            @else
                                            @endif</span>
                                                </li>

                                                <li>
                                                    <i class="flaticon-transport"></i>
                                                    <span>5 Gears</span>
                                                </li>
                                                <li>
                                                    <i class="flaticon-time"></i>
                                        <span>
                                            @if($same_user->auto_year!='')
                                                {{auto_year()[$same_user->auto_year]}}
                                            @else
                                            @endif

                                        </span>
                                                </li>

                                            </ul>

                                            <a href="{{ url('/detaille/'.$same_user->id) }}" class="btn btn-details">Details</a>
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