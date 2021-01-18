@extends('layouts.app')
@section('title')
    Bienvenue
@endsection
@section('header')

@endsection
@section('content')

    <div class="profile-content">
        <meta name="csrf_token" content="{{ csrf_token() }}" />

        @include('front.autos.moto.moto')

        <div class="text-center">


        </div>
    </div>

@endsection
@section('footer')

    @endsection