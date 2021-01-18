@foreach ($result as $key => $value)
    <option value="{{$key}}"> {{ $value }}</option>
@endforeach

{!! Html::script('front/js/jquery-2.2.0.min.js') !!}
{!! Html::script('front/moteur/js/jquery-1.11.3.min.js') !!}

<div hidden>
    {!! Form::open( ['url' => '/contact' , 'method' => 'post','enctype'=>'multipart/form-data','class'=>'s-submit clearfix', 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('Nom') !!}
        {!! Form::text('name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Votre Nom')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Sujet') !!}
        {!! Form::text('subject', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Sujet')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Votre  AddressE-mail ') !!}
        {!! Form::email('email', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your e-mail address')) !!}
    </div>

    <div class="form-group"  >
        {!! Form::label('  Address  E-mail de l\'annonceur') !!}

        {!! Form::email('emaill', $autoInfo->user->email,
              array('required',
                    'class'=>'form-control',
                     'placeholder'=>'  address e-mail  de l\'annonceur')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Votre Message') !!}
        {!! Form::textarea('message', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Votre message')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Contact Us!',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}

</div>
