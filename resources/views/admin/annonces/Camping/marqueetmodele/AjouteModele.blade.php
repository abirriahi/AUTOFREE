@extends('admin.layouts.layoutss')
@section('header')
@endsection
@section('content')


@section('content')

    {!! Form::open( ['url' => '/adminpanel/ajoute/CC/modele/' , 'method' => 'post' , 'files' => true]) !!}

    @include('admin.annonces.Camping.marqueetmodele.formulaire-modele')

    {!! Form::close() !!}

@endsection

