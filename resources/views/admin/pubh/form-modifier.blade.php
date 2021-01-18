@extends('admin.layouts.layoutss')


@section('header')
    {!! Html::script('front/js/jquery-2.2.0.min.js') !!}
@endsection
@section('content')


    {!! Form::model($pi ,  ['url' => '/adminpanel/pubh/update' , 'method' => 'patch' , 'files' => true]) !!}

    <input type="hidden" name="auto_id" value="{{ $pi->id }}" />


    <div class="row form-group">
        <div class="col-md-12">
            @if(isset($pi))

                @if( $pi->pub != '')
                    <img src="{{  Request::root().'/public/sliders/'.$pi->pub}}"style="


                      background-color: rgba(0, 0, 0, 0);
                       background-repeat: no-repeat;
                        background-size: cover;
                           background-position: center center;
                        width: 60%;
                          height: 25%;
                            opacity: 1;
                            visibility: inherit;

                      ">
                    <div class="clearfix"></div>
                    <br>

                 @endif
                 @endif



            {!! Form::file("image" , ['class' => 'form-control']) !!}

        </div>






    </div>

    @if($pi->ok==0)



        <input   id="carroserie0h" name="ok"    type="checkbox" value="0">

        <label  for="carroserie0h">

            Valider
        </label>

    @else


        <input   id="carroserie0xh" name="ok"    type="checkbox" value="0">

        <label for="carroserie0xh">

            Désactiver
        </label>

    @endif
    <div class="b-search__main-form-submit">

        <button type="submit" class="btn m-btn">modifer</button>
    </div>
    {!! Form::close() !!}

@endsection





@section('footer')
    <script>

        $('#carroserie0xh').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie0h').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();

    </script>


@endsection