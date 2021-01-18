<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/step0' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
    <div class="row">
        <div class="col-md-6 col-xs-12">

            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Boite Vitesse <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("auto_vitesse" ,auto_vitesse() , null , array('class' => 'm-selectt','placeholder' => 'vitesse ','name'=>'select1' )) !!}
                    @if ($errors->has('auto_vitesse'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_vitesse') }}</strong>
                                                     </span>
                    @endif


                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Prix <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::number("auto_price", null, ['class' => 'form-control', 'placeholder' => 'Prix ']) !!}
                    @if ($errors->has('auto_price'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('auto_price') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
             </div>
        <div class="col-md-6 col-xs-12">
           <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Select Body Type <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("autos_carrosserie" ,autos_carrosserie() , null ,array('class' => 'm-selecttt', 'placeholder' => 'carrosserie' )) !!}


                    @if ($errors->has('autos_carrosserie'))
                        <span class="help-block"><strong>{{ $errors->first('autos_carrosserie') }}</strong>
                                                               </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>cv/km <span>*</span></label>
                <div class='s-relative'>
                    {!! Form::select("cv" ,cv() , null ,array('class' => 'm-selecttt', 'placeholder' => 'carrosserie' )) !!}


                    @if ($errors->has('cv'))
                        <span class="help-block"><strong>{{ $errors->first('cv') }}</strong>
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
