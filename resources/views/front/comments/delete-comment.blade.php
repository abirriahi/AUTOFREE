@extends('layouts.magazine')


@section('title', '| DELETE COMMENT?')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Supprimer ce commentaire</h1>
            <p>
                <strong>Commentaire:</strong> {{ $comment->comment }}
            </p>

            {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
            {{ Form::submit('Supprimer', ['class' => 'btn btn-lg btn-block btn-danger']) }}
            {{ Form::close() }}
        </div>
    </div>

@endsection