@extends('admin.layouts.layoutss')
@section('header')
@endsection
@section('content')


@section('content')

    {!! Form::open( ['url' => '/adminpanel/ajoute/R/modele/' , 'method' => 'post' , 'files' => true]) !!}

    @include('admin.annonces.Remorque.marqueetmodele.formulaire-modele')

    {!! Form::close() !!}

@endsection

