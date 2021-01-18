<div class="b-submit__main">
    <header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
        <h2 class="">Ajouter les detailles de votre véhicule</h2>
    </header>
    {!! Form::open( ['url' => '/vehiculesell' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}

    <div class="row">
        <label for="input1">Image principale</label>
        {!! Form::file("image" , ['class' => 'form-control']) !!}

        @if ($errors->has('image'))
            <span class="help-block">
                              <strong>{{ $errors->first('image') }}</strong>
                         </span>
        @endif
        <label for="input1">video principale</label>
        {!! Form::text("video",null,array('class' => 'm-selectt ','placeholder' => 'taper le lien de video ')) !!}

        @if ($errors->has('video'))
            <span class="help-block">
                              <strong>{{ $errors->first('video') }}</strong>
                         </span>
        @endif


        <label for="input1">Images</label>
        {!! Form::file("images[]" , ['class' => 'form-control', 'multiple' => true]) !!}

        @if ($errors->has('image'))
            <span class="help-block">
                              <strong>{{ $errors->first('image') }}</strong>
                         </span>
        @endif
    </div>
    <button type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomInUp;">Publier maintenant<span class="fa fa-angle-right"></span></button>
    {{Form::close()}}
</div>
