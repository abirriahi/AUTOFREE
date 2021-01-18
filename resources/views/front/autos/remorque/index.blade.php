@extends('layouts.app')
@section('title')
    Bienvenue
@endsection
@section('header')


@endsection
@section('content')

    <div class="col-md-9">

    </div>
    <div class="profile-content">

        @include('welcome')

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


    <script>
        $('#checkboxE').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkbox2').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
    </script>
    @endsection