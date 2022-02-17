@extends('layout.app')

@section('main_content')
    <div class="container">
        <h1>Lista dei comics</h1>

        @foreach ($comics as $comic)
            <div>
                <h2>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->series }}</a>
                </h2>
                <div>Prezzo: {{ $comic->price }}</div>
            </div>
        @endforeach
    </div>
@endsection