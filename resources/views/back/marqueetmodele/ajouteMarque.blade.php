@extends('admin.layouts.layoutss')
@section('header')
    @endsection


@section('content')


    {!! Form::open( ['url' => '/adminpanel/ajoute/marque/modele/' , 'method' => 'post' , 'files' => true]) !!}

    @include('back.marqueetmodele.formulaire-marque-modele')

    {!! Form::close() !!}




    {!! Form::open( ['url' => '/adminpanel/ajoute/modele/' , 'method' => 'post' , 'files' => true]) !!}

    @include('back.marqueetmodele.formulaire-modele')

    {!! Form::close() !!}








@endsection

