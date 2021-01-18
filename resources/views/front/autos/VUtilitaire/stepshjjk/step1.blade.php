    <div class="b-submit__main">
        <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
            <h2 class="">Ajouter les detailles de votre véhicule</h2>
        </header>
        {!! Form::open( ['url' => '/step1' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                    <label>Enter Make <span>*</span></label>
                    <div class='s-relative'>
                        {!! Form::select("auto_marque" ,auto_marque() , null ,array('class' => 'm-selectt','id'=>'auto_select','placeholder' => 'choisir une marque')) !!}
                        @if ($errors->has('auto_marque'))
                            <span class="help-block">
                                                  <strong>{{ $errors->first('auto_marque') }}</strong>
                                                     </span>
                        @endif
                        <span class="fa fa-caret-down"></span>
                    </div>
                </div>
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
                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                    <label>Poid remorque <span>*</span></label>
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
        </div>
            <div class="col-md-6 col-xs-12">
                <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                    <label>Enter Vehicle Model <span>*</span></label>
                    <div class='s-relative'>
                        {!! Form::select("aut_model" ,[] , null ,array('class' => 'm-selecttt','id'=>'model_select','placeholder' => 'choisir le modéle correspend' )) !!}
                        @if ($errors->has('aut_model'))
                            <span class="help-block">
                                                  <strong>{{ $errors->first('aut_model') }}</strong>
                                                     </span>
                        @endif
                        <span class="fa fa-caret-down"></span>

                    </div>
                </div>
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

<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                    <label>numero telephone<span>*</span></label>
                    <div class='s-relative'>

                        {!! Form::number("num_tel" , null , array('class' => 'm-selectt','placeholder' => 'numero telephone ' )) !!}
                        @if ($errors->has('num_tel'))
                            <span class="help-block">
                                                     <strong>{{ $errors->first('num_tel') }}</strong>
                                                     </span>
                        @endif

                        <span class="fa fa-caret-down"></span>
                    </div>
                </div>
<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                    <label>Descriptione<span>*</span></label>
                    <div class='s-relative'>

                        {!! Form::textarea("auto_description" , null , array('class' => 'm-selectt','placeholder' => 'description ' )) !!}
                        @if ($errors->has('auto_description'))
                            <span class="help-block">
                                                     <strong>{{ $errors->first('auto_description') }}</strong>
                                                     </span>
                        @endif

                        <span class="fa fa-caret-down"></span>
                    </div>
                </div>


            </div>
        </div>
        <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">Save &amp;
            PROCEED to next step<span class="fa fa-angle-right"></span></button>
        {{Form::close()}}                </div>
