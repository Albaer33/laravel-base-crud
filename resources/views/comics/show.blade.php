@extends('layouts.app')

@section('main_content')
    <div class="card">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->series }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->series }}</h5>
            <h5 class="card-title">{{ $comic->title }}</h5>
            <div>type: {{ $comic->type }}</div>
            <div>Prezzo: {{ $comic->price }}</div>
            <p class="card-text">{{ $comic->description }}</p>
        </div>
    </div>
@endsection