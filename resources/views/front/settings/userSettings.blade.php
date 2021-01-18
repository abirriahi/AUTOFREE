@extends('layouts.app')
@section('title')
    Paramètres
@endsection
@section('header')
<style>
    #pSmall{
        font-size: smaller;
        color: grey;
        text-align: center;
    }
</style>
@endsection
@section('content')
    <div class="container">
        <div class="row profile">
            @include('front.settings.navbar')
            <div class="col-md-6">
                <div class="clearfix"></div><br>
                {!! Form::model($user , ['route' => ['settings' , $user->id] , 'method' => 'PATCH']) !!}
                @include('front.settings.formSettings' )
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection
