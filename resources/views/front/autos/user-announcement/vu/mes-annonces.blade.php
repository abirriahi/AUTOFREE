@extends('layouts.app')
@section('title')
    Mes Annonces
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
        $(document).ready(function(){

            $('#auto_select').on('change', function() {
                var marque=this.value;
                var model_form=$('#model_select');
                $.ajax({
                    type: "POST",
                    url: "http://localhost:8080/dashboard/autofree/autofree/public/getmodel",
                    //url: "http://auto-store.ch/public/getmodel",
                    "headers": {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                    data: {"marque":marque },
                    success: function(msg){
                        model_form.html(msg);

                    }
                });
            })

            // jQuery methods go here...

        });
    </script>
@endsection