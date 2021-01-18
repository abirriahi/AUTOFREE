@extends('layouts.appdetaille')
@section('content')



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

    <!-- Car details body start-->
    <div class="car-details-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Option bar start-->
                    <div class="option-bar  details-option-bar clearfix">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="section-heading">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="flaticon-sedan-car-front"></i>
                                        </div>
                                        <div class="media-body hidden-xs">

                                            @if($autoInfo->auto_marque!=0)
                                                {{$autoInfo->marque->auto_marque}}
                                            @else
                                                {{$autoInfo->new_marque}}
                                         @endif
                                            <div class="border"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="header-price">
                                    <h3>{!! $autoInfo->auto_price !!} CHF</h3>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Vestibul!-- Option bar end-->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="car-details sidebar-widget">
                        <!-- Car detail slider start-->
                        <div class="car-detail-slider simple-slider">
                            <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                <div class="carousel-outer">
                                    <!-- Wrapper for slides -->


                                    @if( count($autoInfo->images) == 0)
                                        @if($autoInfo->image!='')

                                        <img src={{checkIfImageIsexist($autoInfo->image)}}  height="450px" style="margin: 0 auto">

                                             @else

                                            <img src= {{  Request::root().'/public/slider/'.getSetting('no_image')}}  height="450px" style="margin: 0 auto"  >
                                          @endif


                                        @elseif( count($autoInfo->images) == 1)
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                @foreach($autoInfo->images as $key => $image)
                                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                        <img src="{{  Request::root().'/public/front/images/'.$image->path}}"style="margin: 0 auto; height:450px">
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    @elseif( count($autoInfo->images) == 2)
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                                            <ol class="carousel-indicators" style="margin-bottom: 50px">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1" ></li>
                                            </ol>
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                @foreach($autoInfo->images as $key => $image)
                                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                        <img src="{{  Request::root().'/public/front/images/'.$image->path}}"style="margin: 0 auto; height:450px">
                                                    </div>
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

                                    @elseif ( count($autoInfo->images) == 3)
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                                            <ol class="carousel-indicators" style="margin-bottom: 50px">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1" ></li>
                                                <li data-target="#myCarousel" data-slide-to="2" ></li>
                                            </ol>
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                @foreach($autoInfo->images as $key => $image)
                                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                        <img src="{{  Request::root().'/public/front/images/'.$image->path}}"style="margin: 0 auto; height:450px">
                                                    </div>
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
                                                @foreach($autoInfo->images as $key => $image)
                                                    <div class="item {{ $key == 0 ? 'active' : '' }} ">
                                                        <img src="{{  Request::root().'/public/front/images/'.$image->path}}"style="margin: 0 auto; height:450px">
                                                    </div>
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










                                    </div>
                                    <!-- Controls -->


                                <!-- Indicators -->

                            </div>
                        </div>
                        <!-- Car detail slider end-->
                        <br/>
                        <!-- Car Specifications start -->
                        <div class="car-specifications clearfix visible-xs sidebar-widget">
                            <!-- Option bar -->
                            <div class="option-bar clearfix">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="section-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="flaticon-sedan-car-front"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h4>Car Specifications</h4>
                                                    <div class="border"></div>
                                                    <p>Check the car specifications</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Reviews Box -->
                            <div class="reviews-box clearfix">
                                <ul class="reviews-star-list">
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                </ul>
                                <div class="reviews">156 reviews</div>
                                <a href="#" class="add-review">
                                    <i class="fa fa-plus-circle"></i>Add Review
                                </a>
                            </div>
                            <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt.<br><br>
                                Neque porro quisqua. Sed ut perspiciatis unde omnis ste natus error sit voluptatem.</p>

                            <a href="#" class="wishlist-btn">
                            <span class="wishlist-btn-l">
                                <i class="fa fa-plus"></i>
                            </span>
                                <span class="wishlist-btn-r">Add to favorite list</span>
                                <div class="clear"></div>
                            </a>
                            <a href="#" class="book-btn">
                                <span class="book-btn-l"><i class="fa fa-check"></i></span>
                                <span class="book-btn-r">Add to favorite list</span>
                                <div class="clear"></div>
                            </a>
                        </div>
                        <!-- Car details end -->
                        <!-- Panel box start -->
                        <div class="panel-box">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab1default" data-toggle="tab" aria-expanded="true">Données</a></li>
                                <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Equipements</a></li>
                                 <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Technical Specifications</a></li>
                             <!--    <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Video</a></li>-->
                            </ul>
                            <div class="panel with-nav-tabs panel-default">
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab1default">
                                            <?php
                                            $text =  $autoInfo->auto_description ;
                                            $newtext = wordwrap($text, 80, "<br />", true);

                                            echo "$newtext\n";
                                            ?>


                                        </div>
                                        <div class="tab-pane fade features" id="tab2default">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 amenities-box">
                                                    <ul class="extra-feature">
                                                        @if($autoInfo->acee_san_cle==1)

                                                            <li>


                                                                <i class="fa fa-check"></i>
                                                                Accès et démarrage sans clé
                                                                @else




                                                            </li>
                                                        @endif
                                                        @if($autoInfo->parcage==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                AIDE AU PARCAGE
                                                            </li>
                                                        @else
                                                        @endif



                                                        @if($autoInfo->Assistant==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                ASSISTANT D’ANGLE MORT
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->camera==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                CAMÉRA DE RECUL
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->capteur_arriere==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                CAPTEURS DE STATIONNEMENT ARRIÈRE
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->capteur_avant1 ==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                CAPTEURS DE STATIONNEMENT AVANT
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->capteur_avant==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                CAPTEURS DE STATIONNEMENT AVANT
                                                            </li>
                                                        @else
                                                        @endif



                                                        CLIMATISATION
                                                        <br><br>
                                                        @if($autoInfo->climatisation_automatique==1)
                                                            <li class="tdd" >
                                                                <i class="fa fa-check"></i>
                                                                AUTOMATIQUE
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->climatisation_manuell==1)
                                                            <li class="tdd" >
                                                                <i class="fa fa-check"></i>
                                                                MANUELLE
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->control_stabilite==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                CONTRÔLE DE LA STABILITÉ
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->crochet_atelage==1)

                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                CROCHET D’ATTELAGE
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->dispositif_mail_libre==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                DISPOSITIF MAINS LIBRES</li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->hard_top==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                HARDTOP
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->bluetooth==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                INTERFACE BLUETOOTH
                                                            </li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->isofix==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>
                                                                ISOFIX</li>
                                                        @else
                                                        @endif

                                                        @if($autoInfo->jantes==1)
                                                            <li>
                                                                <i class="fa fa-check"></i>

                                                                JANTES EN ALU</li>
                                                        @else
                                                        @endif


                                                        PHARES
                                                        @if($autoInfo->phare_laser==1)
                                                            <li  class="tdd">

                                                                <i class="fa fa-check"></i>
                                                                LASER</li>
                                                        @else
                                                        @endif
                                                        @if($autoInfo->phare_laser1==1)
                                                            <li  class="tdd">
                                                                <i class="fa fa-check"></i>
                                                                LASER</li>
                                                        @else
                                                        @endif


                                                        @if($autoInfo->phare_xenon==1)
                                                            <li  class="tdd">


                                                                <i class="fa fa-check"></i>
                                                                XÉNON</li>
                                                        @else
                                                        @endif
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade technical" id="tab3default">

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 amenities-box">

                                                <ul class="extra-feature">
                                                    @if($autoInfo->phare_derectionnel==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            PHARES DIRECTIONNELS
                                                        </li>
                                                    @else
                                                    @endif
                                                    @if($autoInfo->reglage_desiege_electrique==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            RÉGLAGE ÉLECTRIQUE DES SIÈGES
                                                        </li>

                                                    @else
                                                    @endif

                                                    @if($autoInfo->reglage_de_distance==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            RÉGULATEUR DE LA DISTANCE
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->regleur_vitesse==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            RÉGULATEUR DE VITESSE
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->radio_DAB==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            RADIO DAB+
                                                        </li>
                                                    @else
                                                    @endif


                                                    SELLERIE
                                                    @if($autoInfo->sallerie_alcantara==1)
                                                        <li class="tdd">
                                                            <i class="fa fa-check"></i>
                                                            ALCANTARA®
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->sallerie_cuire==1)
                                                        <li class="tdd">
                                                            <i class="fa fa-check"></i>
                                                            CUIR
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->sallerie_partiellement_cuire==1)
                                                        <li class="tdd">
                                                            <i class="fa fa-check"></i>
                                                            PARTIELLEMENT EN CUIR
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->sallerie_tissu==1)
                                                        <li class="tdd">
                                                            <i class="fa fa-check"></i>
                                                            TISSU
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->siege_chauffant==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            SIÈGES CHAUFFANTS
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->siege_ventilite==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            SIÈGES VENTILÉS
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Suspension_augmente==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            SUSPENSION AUGMENTÉ
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Suspension_pneumatique==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            SUSPENSION PNEUMATIQUE
                                                        </li>
                                                    @else
                                                    @endif



                                                    SYSTÈME DE NAVIGATION
                                                    @if($autoInfo->Systeme_de_navigation_integrer==1)
                                                        <li class="tdd">
                                                            <i class="fa fa-check"></i>
                                                            INTÉGRÉ
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Systeme_de_navigation_Portable==1)
                                                        <li class="tdd">
                                                            <i class="fa fa-check"></i>
                                                            PORTABLE
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Systeme_de_navigation_Systeme_de_suivi_de_voie==1)

                                                        <li class="tdd">
                                                            <i class="fa fa-check"></i>
                                                            SYSTÈME DE SUIVI DE VOIE
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Systeme_start_stop==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            SYSTÈME START/STOP
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Toit_ouvrant==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            TOIT OUVRANT
                                                        </li>
                                                    @else
                                                    @endif



                                                    @if($autoInfo->Verrouillage_du_differentiel==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            VERROUILLAGE DU DIFFÉRENTIEL
                                                        </li>
                                                    @else
                                                    @endif

                                                </ul>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 amenities-box">
                                                <ul class="extra-feature">

                                                    @if($autoInfo->jeux_de_pneus==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            2 JEUX DE PNEUS/ROUES
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Autobus_scolaires==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            AUTOBUS SCOLAIRES
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Autotransporter==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            AUTOTRANSPORTER
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Bache==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            BÂCHE
                                                        </li>
                                                    @else
                                                    @endif


                                                    @if($autoInfo->Camion_de_meubles==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            CAMION DE MEUBLES
                                                        </li>
                                                    @else
                                                    @endif


                                                    @if($autoInfo->Grue==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            GRUE
                                                        </li>
                                                    @else
                                                    @endif


                                                    @if($autoInfo->Plateforme_de_levage==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            PLATEFORME DE LEVAGE
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Porte_bagages==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            PORTE-BAGAGES
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Transports_frigorlifique==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            TRANSPORTS FRIGORLIFIQUE
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Treuil==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            TREUIL
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Pour_handicapes==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            POUR HANDICAPÉS
                                                        </li>
                                                    @else
                                                    @endif


                                                    @if($autoInfo->Pour_lexportation==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            POUR L'EXPORTATION
                                                        </li>
                                                    @else
                                                    @endif

                                                    @if($autoInfo->Vehicule_accidentee==1)
                                                        <li>
                                                            <i class="fa fa-check"></i>
                                                            VÉHICULE ACCIDENTÉE
                                                        </li>
                                                    @else
                                                    @endif

                                                </ul>
                                            </div>


                                        </div>
                                        <div class="tab-pane fade" id="tab4default">
                                            <div class="inside-car mrg-btm-40 ">
                                                <iframe src="https://www.youtube.com/embed/m5_AKjDdqaU"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Panel box end -->
                        <!-- Amenities start-->
                        <div class="amenities">
                            <h2 class="title">Specifications</h2>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 amenities-box">
                                    <ul>
                                                <li>
                                                <i class="flaticon-sedan-car-front"></i>
                                                <span>CARROSSERIE:</span>
                                               @if($autoInfo->autos_carrosserie!='')

                                               {{ autos_carrosserie()[$autoInfo->autos_carrosserie] }}

                                               @else
                                               @endif
                                            </li>

                                               <li>
                                                    <i class="flaticon-racing-flag"></i>
                                                    <span>Catégorie:</span>
                                                   @if($autoInfo->auto_categorie!='')

                                                   {{categorie()[$autoInfo->auto_categorie]}}
                                                   @else

                                                   @endif
                                                </li>

                                               <li>
                                                    <i class="flaticon-gasoline-pump"></i>
                                                    <span>Carburant:</span>
                                                   @if($autoInfo->auto_carburan!='')


                                                   {{auto_carburan()[$autoInfo->auto_carburan]}}
                                                   @else
                                                   @endif


                                               </li>

                                                <li>
                                                    <i class="flaticon-road-with-broken-line"></i>
                                                    <span>kilométrage:</span>
                                                    @if($autoInfo->auto_km!='')


                                                    {{ km()[$autoInfo->auto_km]}}

                                                    @else

                                                    @endif
                                                </li>




                                            <li>
                                                <i class="flaticon-time"></i>
                                                <span>Année:</span>
                                                @if($autoInfo->auto_year!='')
                                                {{auto_year()[$autoInfo->auto_year]}}
                                                @else
                                                @endif
                                            </li>


                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 amenities-box">
                                    <ul>

                                            <li>
                                                <i class="flaticon-speedometer"></i>
                                                <span>Vitesse :</span>
                                                @if($autoInfo->auto_vitesse!='')
                                                {{auto_vitesse()[$autoInfo->auto_vitesse]}}
                                                @else
                                                @endif
                                            </li>





                                            <li>
                                                <i class="flaticon-paint-brush"></i>
                                                <span>Couleur intérieure :</span>
                                                @if($autoInfo->auto_coloren!='')
                                                {{ couleuren()[$autoInfo->auto_coloren]}}
                                                @else
                                                @endif
                                            </li>

                                            <li>
                                                <i class="flaticon-paint-brush"></i>
                                                <span>Couleur extérieure:</span>
                                                @if($autoInfo->auto_colorex!='')


                                                {{ couleurex()[$autoInfo->auto_colorex]}}
                                                @else
                                                @endif

                                            </li>


                                            <li>
                                                <i class="flaticon-placeholder"></i>
                                                <span>Emplacement:</span>
                                                @if($autoInfo->ville!='')

                                                    {{ ville()[$autoInfo->ville]}}
                                                @else
                                                @endif
                                            </li>

                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 amenities-box">
                                    <ul>



                                            <li>
                                                <i class="flaticon-car-door"></i>
                                                <span>Portes:</span>
                                                @if($autoInfo->porte!='')
                                                {{porte()[$autoInfo->porte]}}

                                                @else
                                                @endif
                                            </li>







                                            <li>
                                                <i class="flaticon-dollar-symbol"></i>
                                                <span>CO2-Emissions:</span>
                                                @if($autoInfo->Emission_CO2!='')

                                                {{ Emission_CO2()[$autoInfo->Emission_CO2]}}
                                                @else
                                                @endif

                                            </li>





                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- About end-->
                    </div>
                    <!-- Content div end-->


                    <!-- Comments form start -->
                    @if($autoInfo->user->admin==2)

                            <!-- Comments form start -->
                    <div class="contact-form sidebar-widget" >
                        <h1 class="title">Nous Contacter</h1>
                        {!! Form::open( ['url' => '/contact' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    {!! Form::label('Nom') !!}
                                    {!! Form::text('name', null,
                                        array('required',
                                              'class'=>'input-text',
                                              'placeholder'=>'Votre Nom')) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('Sujet') !!}
                                    {!! Form::text('subject', null,
                                        array('required',
                                              'class'=>'input-text',
                                              'placeholder'=>'Sujet')) !!}
                                </div>


                                <div class="form-group">
                                    {!! Form::label('Votre  AddressE-mail ') !!}
                                    {!! Form::email('email', null,
                                        array('required',
                                              'class'=>'input-text',
                                              'placeholder'=>'Your e-mail address')) !!}
                                </div>




                                <div class="form-group"  >
                                    {!! Form::label('  Address  E-mail de l\'annonceur') !!}

                                    {!! Form::email('emaill', $autoInfo->user->email,
                                          array('required',
                                                'class'=>'input-text',
                                                 'placeholder'=>'  address e-mail  de l\'annonceur')) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Envoyer',
                                      array('class'=>'btn btn-submit')) !!}
                                </div>

                            </div>











                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="form-group">
                                    {!! Form::label('Votre Message') !!}
                                    {!! Form::textarea('message', null,
                                        array('required',
                                              'class'=>'input-text',
                                              'placeholder'=>'Votre message')) !!}
                                </div>



                            </div>


                        </div>

                        {!! Form::close() !!}






                    </div>




                    @else
                    @endif   <!-- Comments form end -->
                </div>
                <div class="col-ld-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="details-sidebar pad-div">
                        <!-- Car details sidebar start -->
                        <div class="sidebar-widget car-details-sidebar">
                            @if (Auth::guest())
                                <h3 class="title">CARACTÉRISTIQUES DU VOITURE</h3>


                            @else

                                @if(Auth::user()->id == $autoInfo->user_id)

                                <a href="{{url('/camion/update/'.$autoInfo->id)}}">

                            <h3 class="title">CARACTÉRISTIQUES DU VOITURE</h3>

                                </a>
                                    @elseif(Auth::user()->admin == 1)

                                        <a href="{{url('/camion/update/'.$autoInfo->id)}}">

                                            <h3 class="title">CARACTÉRISTIQUES DU VOITURE</h3>

                                        </a>
                                       @else

                                    <h3 class="title">CARACTÉRISTIQUES DU VOITURE</h3>

                                @endif
                            @endif

                            <ul>

                                <li>
                                    <span>Marque</span> --
                                    @if($autoInfo->auto_marque!= 0)

                                    {{$autoInfo->marque->auto_marque}}
                                   @else

                                        {{$autoInfo->new_marque}}
                                    @endif

                                </li>



                                <li>
                                    <span>Modele</span> --

                                    {{$autoInfo->new_modele}}


                                </li>

                                  <li>
                                      @if($autoInfo->auto_year!='')
                                    <span>Date d'immatriculation</span> -- {{auto_year()[$autoInfo->auto_year]}}

                                          @else
                                      @endif
                                   </li>


                                <li>
                                    <span>Catégorie de véhicule</span> --
                                    @if($autoInfo->auto_categorie!='')

                                        {{  categorie()[$autoInfo->auto_categorie] }}
                                    @else
                                    @endif

                                </li>
                                <li>
                                    <span>Couleur extérieure</span> --

                                    @if($autoInfo->auto_colorex!='')
                                        {{ couleurex()[$autoInfo->auto_colorex]}}

                                    @else
                                    @endif

                                </li>
                                <li>
                                    <span>Couleur intérieure</span> --
                                    @if($autoInfo->auto_coloren!='')
                                        {{couleuren()[$autoInfo->auto_coloren]}}
                                    @else
                                    @endif

                                </li>
                                <li>
                                    <span>Kilomètres</span> --
                                    @if($autoInfo->auto_km!='')
                                        {{  km()[$autoInfo->auto_km]}}
                                    @else

                                    @endif
                                </li>
                                <li>
                                    <span>Boîte à vitesses</span> --
                                    @if($autoInfo->auto_vitesse!='')
                                        {{ auto_vitesse()[$autoInfo->auto_vitesse]}}
                                    @else
                                    @endif
                                </li>
                                <li>


                                    <span>Portes</span> --
                                    @if($autoInfo->porte!='')
                                        {{  porte()[$autoInfo->porte]}}
                                    @else
                                    @endif
                                </li>
                                <li>

                                    <span>Sièges</span> --
                                    @if($autoInfo->auto_siege!='')
                                        {{ auto_siege()[$autoInfo->auto_siege]}}
                                    @else
                                    @endif

                                </li>
                                <li>
                                    <span>Carburant</span> --
                                    @if($autoInfo->auto_carburan!='')
                                        {{ auto_carburan()[$autoInfo->auto_carburan]}}
                                    @else
                                    @endif
                                </li>


                            </ul>
                        </div>
                        <!-- Car details end -->

                        <!-- Help center start -->
                        <div class="helping-Center sidebar-widget grae-color">
                            <h2 class="title">ANNONCEUR</h2>
                            <ul class="contact-link">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    Adress {{$autoInfo->adresse}}
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="#">
                                        TEl {{$autoInfo->num_tel}}
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="#">
                                        {{$autoInfo->email}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Help center end -->



                        <!-- Google map location start -->

                        <!-- Google map location end -->

                        <!-- Private message to dealer start -->
                        <!-- Private message to dealer end -->
                    </div>
                </div>
            </div>


        </div>


    </div>

    <!-- Car details body end-->
@endsection



@section('footer')

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-89110077-2', 'auto');
        ga('send', 'pageview');

    </script>



@endsection
