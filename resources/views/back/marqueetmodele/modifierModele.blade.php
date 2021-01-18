
@extends('admin.layouts.layoutss')
@section('header')
@endsection
@section('content')


@section('content')

    {!! Form::model($auto ,  ['url' => '/adminpanel/modele/' .$auto->id.'/edit', 'method' => 'patch' , 'files' => true]) !!}


    @include('back.marqueetmodele.form-modif-modele')
    {!! Form::close() !!}

@endsection

