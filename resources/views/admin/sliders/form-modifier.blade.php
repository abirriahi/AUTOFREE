@extends('admin.layouts.layoutss')


@section('header')
    {!! Html::script('front/js/jquery-2.2.0.min.js') !!}
@endsection
@section('content')


    {!! Form::model($pi ,  ['url' => '/adminpanel/update/sliders/' .$pi->id, 'method' => 'patch' , 'files' => true]) !!}



    <div class="row form-group">
        <div class="col-md-12">
            @if(isset($pi))

                @if( $pi->slider != '')
                    <img src="{{  Request::root().'/public/sliders/'.$pi->slider}}"style="


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



        <input   id="carroserie0" name="ok"    type="checkbox" value="0">

        <label el for="carroserie0">

            Valider
        </label>

    @else


        <input   id="carroserie0x" name="ok"    type="checkbox" value="0">

        <label for="carroserie0x">

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

        $('#carroserie0x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie0').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();

    </script>


@endsection