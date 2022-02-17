@extends('layout.app')

@section('main_content')
    <div class="container">
        <h1>Inserisci un nuovo fumetto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Url copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
            </div>

            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">data saldi</label>
                <input type="datetime" class="form-control" id="sale_date" name="sale_date" value="{{ old('datetime') }}">
            </div>

            <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
@endsection