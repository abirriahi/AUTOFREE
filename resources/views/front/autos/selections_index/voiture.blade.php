@if(count($autos)  )
    @foreach($autos->chunk(3) as $items )




        <div class="row">

            @foreach($items as $autos  )
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                <div class="thumbnail car-box clearfix wow fadeInUp delay-03s"
                     style="visibility: visible; animation-name: fadeInUp;">
                    @if( $autos->image !='' )
                        <a href="{{ url('/detaille/'.$autos->id) }}">
                            <img  src={{checkIfImageIsexist($autos->image)}}  alt="x"   height=1024px; width=682px;>
                        </a>
                    @elseif( $autos->image =='' )
                        <a href="{{ url('/detaille/'.$autos->id) }}">


                            <img src= {{  Request::root().'/public/'.getSetting('no_image')}} alt="Image" height="100%" width="220"  >
                        </a>
                    @endif



                    <!-- detail -->
                    <div class="caption detail">
                        <!-- Header -->
                        <header class="clearfix">
                            <div class="pull-left">
                                <h5 class="title">
                                    <a href="{{ url('/detaille/'.$autos->id) }}">{{$autos->new_marque}} {{$autos->new_modele}}</a>
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
                                <span>{{$autos->auto_price}} CHF</span>
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

                    </div>

                    <div class="featured-ribon">
                        <h2>Featured Car</h2>
                    </div>

                </div>

            @endforeach
                  </div>

        </div>











    @endforeach
@endif