@extends('admin.layouts.layoutss')
@section('header')

 @endsection
            @section('content')

                {!! Form::open( ['url' => '/adminpanel/ajoute/sliders/' , 'method' => 'post' , 'files' => true]) !!}

                @include('admin.sliders.form')

                {!! Form::close() !!}

            @endsection
