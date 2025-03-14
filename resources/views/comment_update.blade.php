@extends('layout.app')

@section('content')
<div>
    <h1>Modifier le Commentaire</h1>

    <form method="POST" action="{{ route('update', ['id_comment' => $comment->id]) }}">
        @csrf
        @method('PATCH')

        <fieldset>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="lastname" value="{{ $comment->lastname }}" required>
        </fieldset>
        <fieldset>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" value="{{ $comment->firstname }}" required>
        </fieldset>
        <fieldset>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="{{ $comment->email }}" required>
        </fieldset>
        <fieldset>
            <label for="comments">Commentaires :</label>
            <textarea id="comments" name="comments" required>{{ $comment->comments }}</textarea>
        </fieldset>

        <button type="submit">Mettre à jour</button>
        <a href="{{ route('post', $comment->postid) }}">Annuler</a>
    </form>
</div>
@endsection