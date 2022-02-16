@extends('layouts.app')

@section('main_content')
    <h1>Lista dei tipi di pasta</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->series }}</a>
            </h2>
            <div>Prezzo: {{ $comic->price }}</div>
        </div>
    @endforeach
@endsection