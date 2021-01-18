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
                                                        <h4>Search Car</h4>
                                                        <div class="border"></div>
                                                        <p>Search your desire Car</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- title-->
                                <a href="{{url('')}}">
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
                                <a href="{{url('')}}">
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
                                </span>nos
                                </h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-7 cod-pad">
                                <div class="sorting-options">
                                    <select class="sorting">
                                        <option>Price: High to low</option>
                                        <option>Price: Low to high</option>
                                        <option>Sells: High to low</option>
                                        <option>Sells: Low to high</option>
                                    </select>
                                    <a href="car-list-2.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                                    <a href="car-grid-2.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Block heading end -->

                    <!-- Car grid start -->
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <!-- Car box start-->
                            <div class="thumbnail car-box clearfix wow fadeInUp delay-03s">
                                <img src="img/grid/audi_q7_2017.jpg" alt="audi_q7_2017">
                                <!-- detail -->
                                <div class="caption detail">
                                    <!-- Header -->
                                    <header class="clearfix">
                                        <div class="pull-left">
                                            <h5 class="title">
                                                <a href="car-details.html">Audi q7 2017</a>
                                            </h5>
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
                                    <!-- Paragraph -->
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                    </p>
                                    <!-- Facilities List -->
                                    <div class="facilities-area">
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
                                    </div>

                                    <div class="carbox-overlap-wrapper" >
                                        <h2>Audi q7 2017</h2>
                                        <h4>$42,605</h4>

                                        <div class="overlap-btns-area">
                                            <a href="car-details.html" class="overlap-btn"><i class="fa fa-link"></i></a>
                                            <a href="#" class="overlap-btn" data-toggle="modal" data-target="#carVideo"><i class="fa fa-youtube-play"></i></a>
                                            <a href="#" class="overlap-btn" data-toggle="modal" data-target="#carGallary"><i class="fa fa-image"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="featured-ribon">
                                    <h2>Featured Car</h2>
                                </div>
                            </div>
                            <!-- Car box end-->
                        </div>

                    </div>
                    <!-- Car grid end-->

                    <!-- Page navigation start-->
                    <nav aria-label="Page navigation">
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