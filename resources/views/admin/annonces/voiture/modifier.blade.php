@extends('admin.layouts.layoutss')
@section('header')
{!! Html::script('front/js/jquery-2.2.0.min.js') !!}


@endsection
@section('content')
{!!Form::model($bu,['route'=>['adminpanel.annonce.update',$bu->id],'method'=>'PATCH', 'files'=>true] ) !!}

@include('/admin/annonces/voiture/formulaire')
        <!--   </form>-->
{!! Form::close()!!}


@endsection