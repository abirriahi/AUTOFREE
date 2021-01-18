


{!! Form::file("images[]" , ['class' => 'form-control', 'multiple' => true]) !!}

<div class="col-md-10" hidden>
    {!! Form::text("ok" , 0 , ['class' => 'form-control']) !!}

    @if ($errors->has('ok'))
        <span class="help-block">
                    <strong>{{ $errors->first('ok') }}</strong>
                </span>
    @endif
</div>

<div class="b-search__main-form-submit">

    <button type="submit" class="btn m-btn">Ajouter</button>
</div>






