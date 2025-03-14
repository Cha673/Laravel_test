@extends('layout.app')

@section('content')
<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <h1>{{ $title }}</h1>

    @foreach ($posts as $post)
        <article>
            <h2> {{ $post->title }} </h2>
            <p> Id : {{ $post->id }}, Auteur id : {{ $post->userId }}</p>
            <p> {{ $post->body }} </p>
            @php 
            $url = route('post', ['id_post' => $post->id]);
            @endphp
            <a href={{ $url }}>Lien vers l'article</a>
            <hr>
        </article>
    @endforeach

</div>
@endsection
