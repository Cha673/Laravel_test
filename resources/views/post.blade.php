@extends('layout.app')

@section ('content')

<div>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <article>
        @php 
        $url = route('blog');
        $auteur = route('user', ['id_user' => $post->userId]);
        // $update=
        @endphp

        <p>Id : {{ $post->id }}</p>
        <p>Auteur : {{ $post->userId }}</p>
        <a href={{ $auteur }}>Aller vers la page de l'auteur</a>

        <h1>{{ $titre }} {{ $post->title }} </h1>
        <p> {{ $post->body }} </p>
        <a href={{ $url }}>Retour vers le blog</a>

        <br>
        <hr>
        <h2>Commentaires</h2>


        @foreach ($comments as $comment)

                @php
                    $delete = route('delete', ['id_comment' => $comment->id]);
                @endphp

                <hr>
                <p> Prénom : {{ $comment->lastname }} </p>
                <p> Nom : {{ $comment->firstname }} </p>
                <p> Email : {{ $comment->email }} </p>
                <p> Commentaire : {{ $comment->comments }} </p>

                <form method="POST" action="{{ $delete }}">
                    @csrf
                    @method('DELETE') <!-- Spécifie la méthode DELETE -->
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                
        @endforeach
    </article>

    <br>
    <hr>
    <br>
    <h2>Commenter</h2>
    <form method="post" action={{ route('comment') }} >
        @csrf
        {{-- action="{{ route('post.store', $post->id) }} --}}
            <input type="hidden" id="id_post" name="id_post" value={{ $post->id }}>
        <fieldset>
            <input type="text" id="lastname" name="lastname" placeholder="Nom">
        </fieldset>
        <fieldset>
            <input type="text" id="firstname" name="firstname" placeholder="Prénom">
        </fieldset>
        <fieldset>
            <input type="email" id="email" name="email" placeholder="Email">
        </fieldset>
        <fieldset>
            <textarea id="comments" name="comments" placeholder="Commentaires"></textarea>
        </fieldset>
        <button type="submit">Envoyer</button>
    </fom>


</div>
@endsection