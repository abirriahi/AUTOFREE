@extends('admin.layouts.layoutss')
@section('header')
    @endsection
@section('content')


@section('content')
    <li class=""><a href="{{url('/adminpanel/ajoute/C/marque/modele')}}"><i class="icon-angle-right"></i> AJOUTER  NOUVELLE MARQUE et MOdéle </a></li>

    {!! Form::open( ['url' => '/adminpanel/ajoute/C/marque/modele' , 'method' => 'post' , 'files' => true]) !!}

    @include('admin.annonces.Camion.marqueetmodele.formulaire-marque-modele')

    {!! Form::close() !!}

@endsection

