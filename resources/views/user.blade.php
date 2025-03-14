@extends('layout.app')

@section ('content')

<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <article>
        <p>Auteur : {{ $id_user}}</p>

        <h1>{{ $user->name }} {{ $user->username }} </h1>
        <p> Email : {{ $user->email }} </p>
        <div> Adresse :  {{ $user->email }} 
            <ul>
                <li>{{ $user->address->street }} </li>
                <li>{{ $user->address->suite }}</li>
                <li>{{ $user->address->city }}</li>
                <li>{{ $user->address->zipcode }}</li>
                <ul>
                    <li>{{ $user->address->geo->lat }}</li>
                    <li>{{ $user->address->geo->lng }}</li>
                </ul>
            </ul>
        </div>
        
        <p> Téléphone:  {{ $user->phone }} </p>
        <p> Site web : {{ $user->website }} </p>
        <ul> Entreprise : 
            <li>{{ $user->company->name }}</li>
            <li>{{ $user->company->catchPhrase }}</li>
            <li>{{ $user->company->bs }}</li>
        </ul>

    </article>

    <br>
    <hr>

    <h2>Articles</h2>

    @foreach ($posts as $post)
        @if ($post->userId == $id_user)
            <h2> {{ $post->title }} </h2>
            <p> Id : {{ $post->id }}, Auteur id : {{ $post->userId }}</p>
            <p> {{ $post->body }} </p>
            @php 
            $url = route('post', ['id_post' => $post->id]);
            @endphp
            <a href={{ $url }}>Lien vers l'article</a>
            <hr>
        @endif
    @endforeach

    <br>
    <hr>

    <h2>Galeries photos</h2>
    @foreach ($galeries as $galerie)
        @if ($galerie->userId == $id_user)
            <p> Id : {{ $galerie->id }}</p>
            <p> {{ $post->title }} </p>
            @php 
            $url = route('galerie', ['id_galerie' => $galerie->id]);
            @endphp
            <a href={{ $url }}>Lien vers les photos</a>
            <hr>
        @endif
    @endforeach

</div>
@endsection
