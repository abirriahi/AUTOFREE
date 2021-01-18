@extends('admin.layouts.layoutss')
@section('header')
@endsection
@section('content')


@section('content')

    {!! Form::open( ['url' => '/adminpanel/ajoute/VU/modele/' , 'method' => 'post' , 'files' => true]) !!}

    @include('admin.annonces.vu.marqueetmodele.formulaire-modele')

    {!! Form::close() !!}

@endsection

