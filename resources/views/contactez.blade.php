@extends('layouts.app')
@section('content')




        <!-- Sub banner start -->
<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-area">
                        <h2>Contactez Nous</h2>
                        <p></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact body start -->
<div class="contact-body content-area">
    <div class="container">
        <div class="contact-box">
            <!-- Main title -->

            <!-- Contact form start -->
            <div class="contact-form">
                {!! Form::open( ['url' => '/contactnous' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
                <div class="row">
                        <div class="col-md-4">
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


                        </div>
                        <div class="col-md-8">
                             <div class="form-group">
                                {!! Form::label('Votre Message') !!}
                                {!! Form::textarea('message', null,
                                    array('required',
                                          'class'=>'input-text',
                                          'placeholder'=>'Votre message')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Envoyer',
                                  array('class'=>'btn btn-submit')) !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}

            </div>
            <!-- Contact form end -->
            <div class="row">
                <div class="col-md-4">
                    <div class="opening-hours">
                        <h3>Horaire d’ouverture</h3>
                        <ul class="list-style-none">
                            <li><strong>Dimanche </strong> <span class="text-red"> Fermée</span></li>
                            <li><strong>Lundi</strong> <span>08h – 18 heure</span></li>
                            <li><strong>Mardi </strong> <span>08h – 18 heure</span></li>
                            <li><strong>Mercredi </strong> <span>08h – 18 heure</span></li>
                            <li><strong>Jeudi </strong> <span>08h – 18 heure</span></li>
                            <li><strong>Vendredi </strong> <span>08h – 18 heure</span></li>
                            <li><strong>Samedi  </strong> <span>Fermée</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-details">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3>Adresse :</h3>
                                        <p>Rue Du Simplon 21 1800, Vevey</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3>Téléphone </h3>
                                        <p>
                                            <a href="#">Bureau: 077 507 11 42</a>
                                        </p>
                                        <p>
                                            <a href="#">Mobile: 079 374 32 94</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <h3>E-mail </h3>
                                        <p>
                                            <a href="#">Contact@autostore.ch</a>
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">


                                <div class="media">


                                    <div class="media-body">
                                        <style>
                                            .fa {

                                                font-size: 40px;
                                                width: 50px;
                                                text-align: center;
                                                text-decoration: none;

                                            }



                                            .fa-facebook {
                                                background: #3B5998;
                                                color: white;
                                            }

                                            .fa-twitter {
                                                background: #55ACEE;
                                                color: white;
                                            }



                                            .fa-linkedin {
                                                background: #007bb5;
                                                color: white;
                                            }

                                            .fa-youtube {
                                                background: #bb0000;
                                                color: white;
                                            }

                                        </style>


                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-linkedin"></a>
                                        <a href="#" class="fa fa-youtube"></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact body end -->
@endsection