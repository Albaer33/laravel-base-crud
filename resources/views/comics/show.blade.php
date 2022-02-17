@extends('layout.app')

@section('main_content')
    <div class="container">
        <div class="card">
            <img src="{{ $comics->thumb }}" class="card-img-top" alt="{{ $comics->series }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comics->series }}</h5>
                <h5 class="card-title">{{ $comics->title }}</h5>
                <div>type: {{ $comics->type }}</div>
                <div>Prezzo: {{ $comics->price }}</div>
                <p class="card-text">{{ $comics->description }}</p>
    
                <div><a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comics->id]) }}">Modifica</a></div>
                <div>
                    <form action="{{ route('comics.destroy', ['comic' => $comics->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
    
                        <button class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare?')">Cancella</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection