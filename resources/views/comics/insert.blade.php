@extends('layout.app')

@section('main_content')
    <div class="container">
        <h1>Inserisci un nuovo fumetto</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Url copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>

            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">data saldi</label>
                <input type="datetime" class="form-control" id="sale_date" name="sale_date">
            </div>

            <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
@endsection