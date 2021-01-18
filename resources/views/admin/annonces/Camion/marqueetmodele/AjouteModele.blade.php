@extends('admin.layouts.layoutss')
@section('header')
@endsection
@section('content')


@section('content')

    {!! Form::open( ['url' => '/adminpanel/ajoute/C/modele/' , 'method' => 'post' , 'files' => true]) !!}

    @include('admin.annonces.Camion.marqueetmodele.formulaire-modele')

    {!! Form::close() !!}

@endsection

