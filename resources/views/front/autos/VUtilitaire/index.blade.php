@extends('layouts.app')
@section('title')
    Bienvenue
@endsection
@section('header')

@endsection
@section('content')

    <div class="profile-content">

        @include('front.autos.VUtilitaire.vehicule')

        <div class="text-center">


        </div>
    </div>

@endsection
@section('footer')
    <script>
        $(document).ready(function(){

            $('#vehicule_select').on('change', function() {
                var marque=this.value;
                var model_form=$('#vehiculemodel_select');
                $.ajax({
                    type: "POST",
                   // url: "http://localhost:8080/dashboard/autofree/autofree/public/getmodelmoto",
                     url: "http://auto-store.ch/public/getmodelmoto",

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