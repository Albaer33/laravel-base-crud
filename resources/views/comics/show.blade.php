@extends('layout.app')

@section('main_content')
    <div class="card">
        <img src="{{ $comics->thumb }}" class="card-img-top" alt="{{ $comics->series }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comics->series }}</h5>
            <h5 class="card-title">{{ $comics->title }}</h5>
            <div>type: {{ $comics->type }}</div>
            <div>Prezzo: {{ $comics->price }}</div>
            <p class="card-text">{{ $comics->description }}</p>
        </div>
    </div>
@endsection