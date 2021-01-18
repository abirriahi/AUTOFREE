@extends('layouts.app')
@section('title')
    Inscription
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box Start -->
                <div class="form-content-box">
                    <!-- Header -->
                    <div class="header">
                        <h3>Inscription</h3>

                    </div>
                    <!-- Details -->
                    <div class="Details">
                        <!-- form -->
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
                                {!! Form::select("admin" , ['0' => 'Client ' , '2' => 'Particulier'] , null , ['class' => 'form-control']) !!}

                                @if ($errors->has('admin'))
                                    <span class="help-block">
                             <strong>{{ $errors->first('admin') }}</strong>
                              </span>
                                @endif
                            </div>


                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                Mr
                                {!! Form::radio('sex', '1', false, array('id'=>'sex' )) !!}
                                Mme
                                {!! Form::radio('sex', '0', false, array('id'=>'sex')) !!}
                                @if ($errors->has('sex'))
                                    <span class="help-block">
                                  <strong>{{ $errors->first('sex') }}</strong>
                              </span>
                                @endif
                            </div>



                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" name="name" class="input-text" id="full-name" placeholder="Nom">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" class="input-text" id="email-eddress" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <input type="number" name="phone" class="input-text" id="phone" placeholder="Téléphone" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" name="password" class="input-text" id="password" placeholder="Mot de Passe">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" name="password_confirmation" class="input-text" id="password-confirm" placeholder="Confirmer le mot de passe">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-submit">S'inscrire</button>
                            </div>
                        </form>
                        <hr>

                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                             <a href="{{url('/login')}}">Connexion</a>
                        </span>
                    </div>
                </div>
                <!-- Form content box End -->
            </div>
        </div>
    </div>

@endsection
