@extends('layouts.app')
@section('title')
   Mes annonces en attentes
@endsection
@section('header')

@endsection
@section('content')


    <div class="col-md-9">

    </div>
    <div class="profile-content">

        @include('front.autos.voiture-touristique.liste-annonces')


        <div class="text-center">


        </div>
    </div>

@endsection
@section('footer')

    <script>
        $('#checkbox2').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
    </script>
@endsection