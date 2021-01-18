<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/VUstep1' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <!--marque-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Enter Make <span>*</span></label>

                <div class='s-relative'>
                    {!! Form::text("new_marque",null,array('class' => 'm-selectt ','placeholder' => 'taper une marque')) !!}
                    @if ($errors->has('new_marque'))
                        <span class="help-block">
                         <strong>{{ $errors->first('new_marque') }}</strong>
                            </span>
                    @endif

                </div>

            </div>
            <!--annee-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Année de construction<span>*</span></label>
                <div class='s-relative'>

                    {!! Form::select("auto_year" ,auto_year() , null , array('class' => 'm-selectt','placeholder' => 'année' )) !!}
                    @if ($errors->has('auto_year'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_year') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <!--categorie-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Catégories <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("auto_categorie" ,categorie() , null , array('class' => 'm-selectt','placeholder' => 'cathegorie ')) !!}
                    @if ($errors->has('auto_categorie'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_categorie') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <!--couleur ex-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Couleur exterieur <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("auto_colorex" ,couleuren() , null , array('class' => 'm-selectt','placeholder' => 'couleur exterieur ')) !!}
                    @if ($errors->has('auto_colorex'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_colorex') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>

            </div>
            <!--couleur in-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>color Interieur <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("auto_coloren" ,couleuren() , null , array('class' => 'm-selectt','placeholder' => 'couleur interieur ')) !!}
                    @if ($errors->has('auto_coloren'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_coloren') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>

            </div>
            <!--nbr de siege-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Nbr de siége <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("auto_siege" ,auto_siege() , null , array('class' => 'm-selectt','placeholder' => 'siege ')) !!}
                    @if ($errors->has('auto_siege'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_siege') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>

            </div>
            <!--poids remorquable-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>POIDS REMORQUABLE FREINÉ <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("PoidsRemorque" ,PoidsRemorque() , null , array('class' => 'm-selectt','placeholder' => 'PoidsRemorque ')) !!}
                    @if ($errors->has('PoidsRemorque'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('PoidsRemorque') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>

            </div>
            <!--boite vitesse-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Boite Vitesse <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("auto_vitesse" ,auto_vitesse() , null , array('class' => 'm-selectt',
                    'placeholder' => 'vitesse ' )) !!}
                    @if ($errors->has('auto_vitesse'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_vitesse') }}</strong>
                                                     </span>
                    @endif


                    <span class="fa fa-caret-down"></span>
                </div>
            </div>

            <!-- emission-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s" >
                <label>Emission CO2 <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("Emission_CO2", Emission_CO2(), null , array('class' => 'm-selectt','placeholder' => 'Emission CO2 ' )) !!}

                    @if ($errors->has('Emission_CO2'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('Emission_CO2') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>

            </div>

            <!-- km-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>km <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("auto_km" ,km() , null ,array('class' => 'm-selecttt', 'placeholder' => 'KM' )) !!}


                    @if ($errors->has('auto_km'))
                        <span class="help-block"><strong>{{ $errors->first('auto_km') }}</strong>
                                                               </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>





        </div>

        <div class="col-md-6 col-xs-12">
            <!--modele-->

            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Entré le Modele de Véhicule <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::text("new_modele",null,array('class' => 'm-selectt ','placeholder' => 'taper un modéle')) !!}
                    @if ($errors->has('new_modele'))
                        <span class="help-block">
                         <strong>{{ $errors->first('new_modele') }}</strong>
                            </span>
                    @endif

                </div>
            </div>
            <!--Mois-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Mois de Construction <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("auto_month" ,auto_month() , null ,array('class' => 'm-selecttt', 'placeholder' => 'Mois' )) !!}


                    @if ($errors->has('auto_month'))
                        <span class="help-block">
                            <strong>{{ $errors->first('auto_month') }}</strong>
                                                               </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <!--carburant-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Carburant <span>*</span></label>
                <div class='s-relative'>

                    {!! Form::select("auto_carburan" ,auto_carburan() , null , array('class' => 'm-selectt','placeholder' => 'carburan ' )) !!}
                    @if ($errors->has('auto_carburan'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_carburan') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>

            <!--roue-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Roue <span>*</span></label>
                <div class='s-relative'>

                    {!! Form::select("Roues" ,Roues() , null , array('class' => 'm-selectt','placeholder' => 'Roues ' )) !!}
                    @if ($errors->has('Roues'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('Roues') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>

            <!--porte-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Porte <span>*</span></label>
                <div class='s-relative'>

                    {!! Form::select("porte" ,porte() , null , array('class' => 'm-selectt','placeholder' => 'porte ' )) !!}
                    @if ($errors->has('porte'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('porte') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <!--carrouserie-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>carroserie <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("autos_carrosserie" ,VU_carrosserie() , null ,array('class' => 'm-selecttt', 'placeholder' => 'carrosserie' )) !!}


                    @if ($errors->has('autos_carrosserie'))
                        <span class="help-block"><strong>{{ $errors->first('autos_carrosserie') }}</strong>
                                                               </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <!--cv-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>cv/km <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("cv" ,cv() , null ,array('class' => 'm-selecttt', 'placeholder' => 'CV' )) !!}


                    @if ($errors->has('cv'))
                        <span class="help-block"><strong>{{ $errors->first('cv') }}</strong>
                                                               </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <!--prix-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Prix <span>*</span></label>
                <div class='s-relative'>


                    {!! Form::number("auto_price",null,array('class' => 'm-selectt ','placeholder' => 'prix',
                       'style'=>'display: block;
width: 100%;
padding: 15px 20px;
font: 400 13px \'Open Sans|\',sans-serif;
border: 1px solid #eeeeee;
color:#444;
background: #f7f7f7!important;
text-transform: none;
border-radius: 30px;
padding-top: 13px;
padding-bottom: 13px;
height:46px;
'




                    )) !!}
                    @if ($errors->has('auto_price'))
                        <span class="help-block">
                         <strong>{{ $errors->first('auto_price') }}</strong>
                            </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>

            </div>
            <!-- consommation-->
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s" >
                <label>Consommation <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("consommations", Consommation(), null , array('class' => 'm-selectt','placeholder' => 'Consommation ' )) !!}

                    @if ($errors->has('consommations'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('consommations') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>

            </div>


        </div>
    </div>
    <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Enregister &amp;
        passer à l'étape suivante  <span class="fa fa-angle-right"></span></button>
    {{Form::close()}}                </div>
