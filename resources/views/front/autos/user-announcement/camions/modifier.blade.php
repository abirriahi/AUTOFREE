@extends('layouts.app')
@section('title')
    Bienvenue
@endsection
@section('header')
    {!! Html::script('front/js/jquery-2.2.0.min.js') !!}

@endsection
@section('content')


    <div class="profile-content">
        {!! Form::model($auto ,  ['url' => 'update/camion' , 'method' => 'patch' , 'files' => true]) !!}
        <input type="hidden" name="auto_id" value="{{ $auto->id }}" />


        @include('front.autos.user-announcement.camions.form-modif')
        {!! Form::close() !!}


    </div>

    @endsection
    @section('footer')
            <!-- script  checkbox  recherche avancé carroserie -->

    <script>
        $('#carroserie0').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
        $('#carroserie0x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie1').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#carroserie1x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie2').on('change', function(){
            this.value = this.checked ? 2 : 0;
            // alert(this.value);
        }).change();
        $('#carroserie2x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie3').on('change', function(){
            this.value = this.checked ? 3 : 0;
            // alert(this.value);
        }).change();
        $('#carroserie3x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie4').on('change', function(){
            this.value = this.checked ? 4 : 0;
            // alert(this.value);
        }).change();
        $('#carroserie4x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie5').on('change', function(){
            this.value = this.checked ? 5 : 0;
            // alert(this.value);
        }).change();
        $('#carroserie5x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie6').on('change', function(){
            this.value = this.checked ? 6 : 0;
            // alert(this.value);
        }).change();
        $('#carroserie6x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie7').on('change', function(){
            this.value = this.checked ? 7 : 0;
            // alert(this.value);
        }).change();
        $('#carroserie7x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#carroserie8').on('change', function(){
            this.value = this.checked ? 8 : 0;
            // alert(this.value);
        }).change();
        $('#carroserie8x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>





    <!-- script  checkbox métaliser recherche avancé-->
    <script>
        $('#checkboxM1').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxM1x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <!-- script  checkbox avec garanti recherche avancé-->
    <script>
        $('#checkboxG1').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxG1x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxG').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxGx').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <!-- script  checkbox Véhicule non accidenté recherche avancé-->
    <script>
        $('#checkboxVA1').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxVA1x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <!-- script  checkbox recherche avancé equipement -->

    <script>
        $('#checkboxE').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxEx').on('change', function(){
            this.value = this.checked ? 0: 0;
            // alert(this.value);
        }).change();

    </script>



    <script>
        $('#checkboxE1').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE1x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE2').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE2x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE3').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE3x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE4').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE4x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE21').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE21x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE22').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE22x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE23').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE23x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE24').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE24x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE31').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE31x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE32').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE32x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>


    <script>
        $('#checkboxE33').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE33x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE34').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE34x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE41').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE41x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE42').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE42x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE43').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();

        $('#checkboxE43x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE51').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE51x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE52').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE52x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE53').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE53x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE61').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE61').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE62').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE62x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>





    <script>
        $('#checkboxE63').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE63x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE71').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE72').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE72').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE73').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE73x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE81').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE81x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE82').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE82x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE83').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE83x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE91').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE91x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE92').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE92x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE93').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE93x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>



    <script>
        $('#checkboxE101').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE101x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE102').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE102x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE103').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE103x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE111').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE111x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE112').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE112x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE131').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE131x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE132').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE132x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE141').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE141x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE142').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE142x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE151').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE151x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>


    <script>
        $('#checkboxE152').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE152x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE161').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE161x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE162').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE162x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE171').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE171x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE172').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE172x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE181').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
     $('#checkboxE181x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE182').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE182x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE191').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE191x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE192').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE192x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE201').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE201x').on('change', function(){
            this.value = this.checked ? 0: 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE202').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE202x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE211').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE211x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE212').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE212x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxE221').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxE221x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>

    <!-- script  checkbox ajoute-->
    <script>
        $('#checkbox1').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox2').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox2').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox3').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox3x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox4').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox4x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox5').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox5x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox6').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox6x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox7').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox7x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox8').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox8x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox9').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox9x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox10').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox10x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>


    <script>
        $('#checkbox11').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox11x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox12').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox12x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox13').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox13x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox14').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox14x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox15').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox15x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox16').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox16x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox17').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox17x').on('change', function(){
            this.value = this.checked ? 0: 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox18').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox18x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox19').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox19x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox20').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox20x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>





    <script>
        $('#checkbox21').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox21x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox22').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox22x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox23').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox23x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox24').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox24x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox25').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox25x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>

    <script>
        $('#checkbox26').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox26x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>

    <script>
        $('#checkbox27').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox27x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox28').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox28x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox29').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox29x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox30').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox30x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>



    <script>
        $('#checkbox31').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox31x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox32').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox32x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox33').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox33x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox34').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox34x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox35').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox35x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox36').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox36x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox37').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox37x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox38').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox38x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox39').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox39x').on('change', function(){
            this.value = this.checked ? O : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox40').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox40x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>


    <script>
        $('#checkbox41').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox41x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox42').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox42x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox43').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox43x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox44').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change()
        ;$('#checkbox44x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox45').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox45x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox46').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox46x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox47').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox47x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox48').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox48x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox49').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox49x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox50').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkbox50x').on('change', function(){
            this.value = this.checked ? 0 : 0;
            // alert(this.value);
        }).change();
    </script>


@endsection