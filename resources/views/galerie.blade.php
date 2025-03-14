@extends('layout.app')

@section ('content')

<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <div>
        @foreach ($photos as $photo)
            @if ($photo->albumId == $id_galerie)
                <p>Id : {{ $photo->id}}</p>
                <p>AlbumId : {{ $photo->albumId}}</p>
                <img src={{ $photo->url }} alt={{ $photo->title }}>
                <p> {{ $photo->title }} </p>
                <hr>
            @endif
        @endforeach

    </div>
</div>
@endsection
