@if(count($vu)  )
    @foreach($vu->chunk(3) as $items )

        <div class="row">

            @foreach($items as $vu  )
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <!-- Car box start-->
                    <div class="thumbnail car-box clearfix wow fadeInUp delay-03s">
                        <!--  <img src="front/img/grid/bmw_emw_m3_diski_serie.jpg" alt="bmw_emw_m3_diski_serie">-->
                        @if( $vu->image !='' )
                            <a href="{{ url('/detailleVU/'.$vu->id) }}">
                                <img src={{checkIfImageIsexist($vu->image)}} alt="Image" height="100%" width="220">
                            </a>
                        @elseif( $vu->image =='' )
                            <a href="{{ url('/detailleVU/'.$vu->id) }}">


                                <img src= {{  Request::root().'/public/'.getSetting('no_image')}} alt="Image" height="100%" width="220"  >
                            </a>
                            @endif

                        <div class="carbox-overlap-wrapper" style="background:rgba(0, 0, 0, 0.3);




                                             height: auto;
                                             width: 92%;
                                             left:auto;
                                             top: 0px;



                         ">      <h2>{{$vu->new_marque}} {{$vu->new_model}} 2017</h2>
                            <h4>{{$vu->auto_price}} CHF</h4>

                            <div class="overlap-btns-area">
                                <a href="{{ url('/detailleVU/'.$vu->id) }}" class="overlap-btn"><i class="fa fa-link"></i></a>
                            </div>
                        </div>

                                    <!-- detail -->


                    </div>
                    <!-- Car box end-->
                </div>
            @endforeach


        </div>

    @endforeach
@endif


