<div class="car-list-box">
    <div class="header">
        <h3>Changer vos informations</h3>
    </div>
<hr>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-6 control-label">Nom d'utilisateur *</label>
        <div class="col-md-6">
            {!!Form::text("name",null,['class'=>'form-control'])!!}
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                   </span>
            @endif
        </div>
    </div>

    <div class="clearfix"></div>


    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        <label for="phone" class="col-md-6 control-label">Numéro de téléphone</label>
        <div class="col-md-6">
            {!!Form::number("phone",null,['class'=>'form-control'])!!}
            @if ($errors->has('phone'))
                <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                   </span>
            @endif
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="clearfix"></div>


    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="address" class="col-md-6 control-label">Addresse</label>
        <div class="col-md-6">
            {!!Form::email("email",null,['class'=>'form-control'])!!}
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                   </span>
            @endif
        </div>
    </div>

    <br>
    <p id="pSmall"> Remarque – Votre nom d’utilisateur doit inclure votre véritable nom.</p>
    <hr>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <button type="submit" class="btn btn-submit"> Enregistrer les modifications</button>

            </div>

            <div class="col-md-6">
                <a class="btn btn-submit " href="{{ url('/settings') }}">Annuler</a>

            </div>
        </div>
    </div>
</div>
