<div class="car-list-box">
    <div class="header">
        <h3>Changer le mot de passe</h3>
    </div>
    <hr>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Actuel *</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password">
            @if ($errors->has('password'))
                <span class="help-block">
                 <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Nouveau *</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="newpassword">
            @if ($errors->has('newpassword'))
                <span class="help-block">
                 <strong>{{ $errors->first('newpassword') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Confirmer *</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation">
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="clearfix"></div>
    <br>
    <p id="pSmall"> Remarque – Nous vous conseillons d'évitez les mots de passe trop simples.</p>
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
