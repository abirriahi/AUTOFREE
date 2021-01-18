<div class="tab-pane fade active in" id="tab1default">
    {{ Form::open(['url' => '/search', 'method' => 'get']) }}

    <div class="b-search__main-form wow zoomInUp" data-wow-delay="0.3s">
        <div class="row">

            <div class="col-xs-22 col-md-8">
                <br>
                <div class="m-firstSelects">

                    <script type="text/javascript">
                        $(document).on('change','.auto_marque_id',function (){
                            var auto_marque = $('.auto_marque_id option:selected').val();
                            if(auto_marque > 0)
                            {

                                $.ajax({
                                    url:"{{url('get/auto_model')}}",
                                    dataType:'html',
                                    type:'get',
                                    data:{auto_marque_2:auto_marque},
                                    success: function(data)
                                    {
                                        $('.auto_model').html(data);
                                        $('.auto_model_data').removeClass('hidden');
                                    }
                                });
                            }
                        });
                    </script>
                    <div class="col-xs-4">
                        <?php
                        $get_auto_marque = App\Auto::groupBy('auto_marque')->where('validation',1)->distinct()->get(['auto_marque']);
                        ?>
                        {!! Form::select("auto_marque" ,
                         App\AutoMarque::whereIn('id',$get_auto_marque)->pluck('auto_marque','id')
                         , null ,array('id'=>'select1','class'=>'auto_marque_id','placeholder' => 'marque' )) !!}

                        <span class="fa fa-caret-down"></span>
                    </div>
                    <div class="col-xs-4 auto_model_data ">
                        <select  class="auto_model" >
                            <option  selected="">Modele</option>
                        </select>

                        <span class="fa fa-caret-down hidden"></span>
                    </div>


                    <div class="col-xs-4">
                        {!! Form::select("auto_year" ,auto_year() , null,array('placeholder' => 'année','id' => 'select1' ) ) !!}

                        <span class="fa fa-caret-down"></span>
                    </div>
                </div>
                <div class="m-secondSelects">
                    <div class="col-xs-4">
                        {!! Form::select("cv" ,cv() , null ,array(
                       'placeholder' => 'Kilométre','id' => 'select1')) !!}

                        <span class="fa fa-caret-down"></span>
                    </div>
                    <div class="col-xs-4">
                        {!! Form::select("auto_carburan" ,auto_carburan() , null ,array(
                        'placeholder' => 'carburant','id' => 'select1')) !!}

                        <span class="fa fa-caret-down"></span>
                    </div>
                    <div class="col-xs-4">

                        {!! Form::select("autos_carrosserie" ,autos_carrosserie() , null ,array(
                                                        'placeholder' => 'carrosserie','id' => 'select1')) !!}

                        <span class="fa fa-caret-down"></span>
                    </div>


                </div>


            </div>

            <div >

            </div>
            <div class="col-md-4 col-xs-12 text-left s-noPadding">

                <div class="b-search__main-form-range">
                    <label></label>
                    <div ></div>

                </div>

                <div class="b-search__main-form-submit">

                    <a href="{{url('/advancedsearch')}}">recherche avancée</a>
                    <button type="submit" class="btn m-btn">LANCER LA RECHERCHE<span class="fa fa-angle-right"></span></button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>


</div>
/****************/
@if( count($pubh) == 0 )

    <div class="sub-banner">
        <div class="overlay"  style="padding-bottom: 250px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-area">

                            <p> </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@elseif( count($pubh) == 1)

    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($pubh as $key => $image)
                <style>

                    .sub-baner {
                        color: white;
                        background-color: rgba(0, 0, 0, 0);
                        background-repeat: no-repeat;

                        background-size: cover;
                        background-position: center center;
                        width: 100%;
                        height: auto;
                        opacity: 1;
                        visibility: inherit;
                        text-align: center;
                    }

                </style>
                <div class="sub-baner {{ $key == 0 ? 'active' : '' }} "

                >

                    <img src="{{  Request::root().'/sliders/'.$image->pub}}">



                </div>
            @endforeach
        </div>

    </div>
@endif






/*********************/



            <div class="car-list-box clearfix wow fadeInUp delay-03s">
                <div class=" row-table row-flush">





                    <div class="col-lg-4  col-md-4 col-sm-4 col-xs-12 car-pic">

                        @if( $autos->image !='' )
                            <a href="{{ url('/detaille/'.$autos->id) }}">
                                <img src={{checkIfImageIsexist($autos->image)}} alt="Image" height="100%" width="220">
                            </a>
                        @elseif( $autos->image =='' )
                            <a href="{{ url('/detaille/'.$autos->id) }}">


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
                                    <a href="car-details.html">
                                        {{$autos->new_marque}}

                                        {{$autos->new_modele}} </a>
                                </h3>
                                <!-- Custom List -->
                                <ul class="custom-list">
                                    <li>
                                        <a href="#">

                                            @if($autos->auto_categorie!='')

                                                {{  categorie()[$autos->auto_categorie] }}
                                            @else
                                            @endif

                                        </a> /
                                    </li>
                                    <li>
                                        <a href="#">


                                            @if($autos->auto_vitesse!='')

                                                {{  auto_vitesse()[$autos->auto_vitesse] }}
                                            @else
                                            @endif

                                        </a> /
                                    </li>

                                </ul>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                        <span> @if($autos->auto_price!='')

                                                {{  $autos->auto_price }} CHF
                                            @else
                                            @endif
                                        </span>
                            </div>
                        </header>
                        <div class="clearfix"></div>
                        <!-- paragraph -->
                        <?php
                        $text =  $autos->auto_description ;
                        $newtext = wordwrap($text, 40, "<br />", true);

                        echo "$newtext\n";
                        ?>
                                <!-- Facilities List -->
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-gasoline-pump"></i>
                                        <span> @if($autos->auto_carburan!='')


                                                {{auto_carburan()[$autos->auto_carburan]}}
                                            @else
                                            @endif
                                         </span>
                            </li>
                            <li>
                                <i class="flaticon-automatic-flash-symbol"></i>
                                        <span>@if($autos->transmission!='')


                                                {{Transmission()[$autos->transmission]}}
                                            @else
                                            @endif</span>
                            </li>
                            <li>
                                <i class="flaticon-road-with-broken-line"></i>
                                        <span>@if($autos->auto_km!='')


                                                {{km()[$autos->auto_km]}}
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
                                            @if($autos->auto_year!='')
                                                {{auto_year()[$autos->auto_year]}}
                                            @else
                                            @endif

                                        </span>
                            </li>
                        </ul>


















                        <!-- Btn Div -->
                        <a href="{{ url('/detaille/'.$autos->id) }}" class="btn btn-details">Details</a>
                    </div>
















                </div>

            </div>
