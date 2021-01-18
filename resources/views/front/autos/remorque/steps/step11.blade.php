<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/step0' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
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

                    {!! Form::select("auto_year" ,auto_year() , null , array('class' => 'm-selectt','placeholder' => 'année ','name'=>'select1' )) !!}
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
                    {!! Form::select("auto_categorie" ,categorie() , null , array('class' => 'm-selectt','placeholder' => 'nbr de place ','name'=>'select1' )) !!}
                    @if ($errors->has('auto_categorie'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_categorie') }}</strong>
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
                    {!! Form::select("auto_month" ,auto_month() , null ,array('class' => 'm-selecttt', 'placeholder' => 'carrosserie' )) !!}


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

                    {!! Form::select("auto_carburan" ,auto_carburan() , null , array('class' => 'm-selectt','placeholder' => 'carburan ','name'=>'select1' )) !!}
                    @if ($errors->has('auto_carburan'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_carburan') }}</strong>
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
