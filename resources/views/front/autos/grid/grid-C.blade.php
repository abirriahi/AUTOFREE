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


    <!-- Car grid start-->
    <div class="car-grid content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <!-- Sidebar start-->
                    <div class="sidebar">
                        <aside class="sidebar-widget">
                            <!-- Review search -->
                            <div class="single-block review">
                                <!-- Option Bar -->
                                <div class="option-bar clearfix">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="section-heading">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <i class="flaticon-sedan-car-front"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4>Nos Annonces</h4>
                                                        <div class="border"></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- title-->
                                <a href="{{url('/gridsv')}}">
                                    <h2 class="title">voiture</h2>
                                </a>

                                <!-- Ratings Start-->

                                <!-- Ratings End-->
                            </div>

                            <!-- Search Fields -->

                            <div class="single-block">
                                <a href="{{url('/gridsM')}}">
                                    <h2 class="title">Moto</h2>
                                </a>

                            </div>

                            <div class="category-box">
                                <!-- title-->
                                <a href="{{url('/gridsC')}}">
                                    <h2 class="title">Camion</h2>
                                </a>


                            </div>
                            <div class="category-box">
                                <!-- title-->
                                <a href="{{url('/gridsR')}}">
                                    <h2 class="title">Remorque</h2>
                                </a>


                            </div>

                            <div class="single-block">
                                <!-- title-->
                                <a href="{{url('/gridsCC')}}">
                                    <h2 class="title">Camping Car</h2>
                                </a>


                            </div>

                            <div class="single-block">
                                <a href="{{url('gridsVU')}}">
                                    <h2 class="title">Vehicule Utilitaire</h2>

                                </a>

                            </div>

                            <!-- Brands search -->

                            <!-- category box search -->

                        </aside>
                        <!-- end-->

                        <!-- Recent news start-->
                        <!-- Recent news end-->

                        <!-- Helping Start-->
                        <!-- Helping End-->
                    </div>
                    <!-- Sidebar End-->
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <!-- Block heading Start-->
                    <div class="block-heading">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-5 cod-pad">
                                <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-caret-right icon-design"></i>
                                    <i class="fa fa-th-large"></i>
                                </span>Nos Annonces
                                </h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7 cod-pad">
                                <div class="sorting-options">

                                    <a href="#" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                                    <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Block heading end -->

                    <!-- Car grid start -->
                    <div class="row">
                        @if(count($autos)  )
                            @foreach($autos->chunk(3) as $items )
                                @foreach($items as $autos  )

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <!-- Car box start-->
                                        <div class="thumbnail car-box clearfix wow fadeInUp delay-03s">
                                            @if( $autos->image !='' )
                                                <a href="{{ url('/detaille/'.$autos->id) }}">
                                                    <img src={{checkIfImageIsexist($autos->image)}} alt="audi_q7_2017" >
                                                </a>
                                            @elseif( $autos->image =='' )
                                                <a href="{{ url('/detaille/'.$autos->id) }}">


                                                    <img src= {{  Request::root().'/slider/'.getSetting('no_image')}} alt="Image" >
                                                </a>
                                            @endif




                                            <div class="carbox-overlap-wrapper" >
                                                <h2>  {{$autos->new_marque}} {{$autos->new_modele}} </h2>
                                                <h4>{{$autos->auto_price}} CHF</h4>

                                                <div class="overlap-btns-area">
                                                    <a href="{{ url('/camion/detaille/'.$autos->id) }}" class="overlap-btn"><i class="fa fa-link"></i></a>
                                                    <div class="featured-ribon">
                                                        @if($autos->validation==0)
                                                            <h2 >En Attente</h2>

                                                        @elseif($autos->validation ==1 && $autos->enpublic==1 )
                                                            <a href=" {{url('/change_choixC/'.$autos->id.'/0')}}">


                                                                <h2>déselectionner</h2>

                                                            </a>

                                                        @elseif($autos->validation ==1 && $autos->enpublic==0 )



                                                            <a href=" {{url('/change_choixC/'.$autos->id.'/1')}}">
                                                                <h2>Publier</h2>

                                                            </a>

                                                        @endif
                                                    </div>



                                                </div>
                                            </div>






                                        </div>
                                        <!-- Car box end-->
                                    </div>



                                @endforeach
                            @endforeach
                        @endif


                    </div>
                    <!-- Car grid end-->

                    <!-- Page navigation start-->
                    <nav aria-label="Page navigation" hidden>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Page navigation end-->
                </div>
            </div>
        </div>
    </div>
    <!-- Car grid end-->

    <!-- Footer start-->




    <!-- Footer start-->

    <!-- Footer end-->


    <!-- Copy right end-->

    <!-- Car Viedo Modal -->

    </body>

    <!-- Mirrored from auto-dealer-dot-my-experiments-163718.appspot.com/car-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 16:13:35 GMT -->
    </html>

@endsection