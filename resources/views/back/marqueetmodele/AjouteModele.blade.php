@extends('admin.layouts.layoutss')
@section('header')
@endsection
@section('content')


@section('content')

    {!! Form::open( ['url' => '/adminpanel/ajoute/modele/' , 'method' => 'post' , 'files' => true]) !!}

    @include('back.marqueetmodele.formulaire-modele')

    {!! Form::close() !!}

@endsection

