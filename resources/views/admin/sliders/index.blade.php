@extends('admin.layouts.layoutss')

@section('content')


                <label for="input1">Images</label>
                <br><br><br>
                @if( count($pi) == 0 )
                    <div class="carousel-inner" role="listbox">
                        <div class="item item-1 active">
                            <div class="container">
                                <!-- Banner Slider Inner 1 -->
                                <div class="banner-slider-inner">
                                    <!-- Title-->
                                    <h1><span>Welcome to</span> Auto Free</h1>
                                    <!-- Paragraph -->
                                    <p>Trusted and Secure place for selling and buying cars!</p>
                                    <!-- Btn -->
                                    <a href="#" class="btn btn-view">View all car</a>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="container">
                                <!-- Banner Slider Inner 1 -->
                                <div class="banner-slider-inner">
                                    <!-- Title-->
                                    <h1><span>Best place to </span> find cars!</h1>
                                    <!-- Paragraph -->
                                    <p>Trusted and Secure place for selling and buying cars!</p>
                                    <!-- Btn -->
                                    <a href="#" class="btn btn-view">View all car</a>
                                </div>
                            </div>
                        </div>
                        <div class="item item-3">
                            <div class="container">
                                <!-- Banner Slider Inner 1 -->
                                <div class="banner-slider-inner">
                                    <!-- Title-->
                                    <h1><span>Best place for </span>sell car!</h1>
                                    <!-- Paragraph -->
                                    <p>Trusted and Secure place for selling and buying cars!</p>
                                    <!-- Btn -->
                                    <a href="#" class="btn btn-view">View all car</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @elseif( count($pi) == 1)

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @foreach($pi as $key => $image)
                                <div class="item {{ $key == 0 ? 'active' : '' }} ">

                                    <img src="{{  Request::root().'/public/sliders/'.$image->slider}}"style="


                      background-color: rgba(0, 0, 0, 0);
                       background-repeat: no-repeat;
                        background-size: cover;
                           background-position: center center;
                        width: 120%;
                          height: 50%;
                            opacity: 1;
                            visibility: inherit;

                      ">


                                </div>
                            @endforeach
                        </div>

                    </div>

                @elseif( count($pi) == 2)
                    <div id="myCarousel" class="carousel slide" data-ride="carousel"  >
                        <ol class="carousel-indicators" style="margin-bottom: 50px"  >
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" ></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @foreach($pi as $key => $image)

                                <div class="item {{ $key == 0 ? 'active' : '' }} ">


                                    <img src="{{  Request::root().'/public/sliders/'.$image->slider}}"style="


                      background-color: rgba(0, 0, 0, 0);
                       background-repeat: no-repeat;
                        background-size: cover;
                           background-position: center center;
                        width: 120%;
                          height: 50%;
                            opacity: 1;
                            visibility: inherit;

                      ">


                                </div>




                            @endforeach
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" >
                            <span class="fa fa-angle-left" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" >
                            <span class="fa fa-angle-right" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>





                    </div>


                @elseif ( count($pi) == 3)
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                        <ol class="carousel-indicators" style="margin-bottom: 50px" hidden>
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" ></li>
                            <li data-target="#myCarousel" data-slide-to="2" ></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            @foreach($pi as $key => $image)


                                <div class="item {{ $key == 0 ? 'active' : '' }} ">


                                    <img src="{{  Request::root().'/public/sliders/'.$image->slider}}"style="


                      background-color: rgba(0, 0, 0, 0);
                       background-repeat: no-repeat;
                        background-size: cover;
                           background-position: center center;
                        width: 120%;
                          height: 50%;
                            opacity: 1;
                            visibility: inherit;

                      ">    </div>
                            @endforeach
                        </div>

                        <!-- Left and right controls -->

                    </div>
                @else

                    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                        <ol class="carousel-indicators" style="margin-bottom: 50px">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" ></li>
                            <li data-target="#myCarousel" data-slide-to="2" ></li>
                            <li data-target="#myCarousel" data-slide-to="3" ></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @foreach($pi as $key => $image)
                                <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                    <img src="{{  Request::root().'/public/sliders/'.$image->slider}}"style="


                      background-color: rgba(0, 0, 0, 0);
                       background-repeat: no-repeat;
                        background-size: cover;
                           background-position: center center;
                        width: 120%;
                          height: 50%;
                            opacity: 1;
                            visibility: inherit;

                      ">    </div>
                            @endforeach
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="fa fa-angle-right" style="margin-top: 220px; color:white;    text-shadow: 2px 2px 4px #000000;" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>




                @endif






@endsection
