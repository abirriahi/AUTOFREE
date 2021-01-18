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
        $('#checkboxE').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
    </script>
    <script>
        $('#checkboxes-0').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxes-1').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxes-2').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxes-3').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxes-4').on('change', function(){
            this.value = this.checked ? 1 : 0;
            // alert(this.value);
        }).change();
        $('#checkboxes-5').on('change', function(){
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