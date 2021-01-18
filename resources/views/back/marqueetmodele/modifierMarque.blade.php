
@extends('admin.layouts.layoutss')
@section('header')
@endsection
@section('content')


@section('content')

    {!! Form::model($auto ,  ['url' => '/adminpanel/marques/' .$auto->id, 'method' => 'patch' , 'files' => true]) !!}


    @include('back.marqueetmodele.form-modif-marque')
    {!! Form::close() !!}

@endsection

