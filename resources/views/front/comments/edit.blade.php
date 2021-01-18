
@extends('layouts.magazine')

@section('title', '| Edit Comment')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Modifier Commentaire</h1>

            {{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}

            {{ Form::label('comment', 'Commentire:') }}
            {{ Form::textarea('comment', null, ['class' => 'form-control']) }}

            {{ Form::submit('Commenter', ['class' => 'btn btn-block btn-success', 'style' => 'margin-top: 15px;']) }}

            {{ Form::close() }}
        </div>
    </div>

@endsection