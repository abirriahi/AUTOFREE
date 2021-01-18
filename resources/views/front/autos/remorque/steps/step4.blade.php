<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/remoroquestep4' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}

    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Adresse <span>*</span></label>
                <div class='s-relative'>

                    {!! Form::text("adresse" , null , array('class' => 'm-selectt','placeholder' => ' adresse ' )) !!}
                    @if ($errors->has('adresse'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('adresse') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>
            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>Email <span>*</span></label>
                <div class='s-relative'>

                    {!! Form::email("email" , null , array('class' => 'm-selectt','placeholder' => 'email ' )) !!}
                    @if ($errors->has('email'))
                        <span class="help-block">
                                                     <strong>{{ $errors->first('email') }}</strong>
                                                     </span>
                    @endif

                    <span class="fa fa-caret-down"></span>
                </div>
            </div>




        </div>
        <div class="col-md-6 col-xs-12">

            <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                <label>numero telephone<span>*</span></label>
                <div class='s-relative'>

                    {!! Form::number("num_tel" , null , array('class' => 'm-selectt',
                    'placeholder' => 'numero téléphone ' ,
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

                    {!! Form::textarea("auto_description" , null ,
                     array('placeholder' => 'description ' ,

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
