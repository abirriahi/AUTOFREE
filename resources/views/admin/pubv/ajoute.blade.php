@extends('admin.layouts.layoutss')
@section('header')

 @endsection
            @section('content')

                {!! Form::open( ['url' => '/adminpanel/ajoute/pubv/' , 'method' => 'post' , 'files' => true]) !!}

                @include('admin.pubv.form')

                {!! Form::close() !!}

            @endsection
