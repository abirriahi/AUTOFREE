@extends('admin.layouts.layoutss')
@section('header')
@endsection
@section('content')


@section('content')

    {!! Form::open( ['url' => '/adminpanel/ajoute/moto/modele/' , 'method' => 'post' , 'files' => true]) !!}

    @include('admin.annonces.moto.marqueetmodele.formulaire-modele')

    {!! Form::close() !!}

@endsection

