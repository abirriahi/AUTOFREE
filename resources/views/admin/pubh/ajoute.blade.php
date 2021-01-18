@extends('admin.layouts.layoutss')
@section('header')

 @endsection
            @section('content')

                {!! Form::open( ['url' => '/adminpanel/ajoute/pubh/' , 'method' => 'post' , 'files' => true]) !!}

                @include('admin.pubh.form')

                {!! Form::close() !!}

            @endsection
