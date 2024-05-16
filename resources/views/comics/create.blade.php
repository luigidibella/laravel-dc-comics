@extends('layout.main')

@section('content')

<div class="container py-5">
    <h1>Nuovo fumetto</h1>
    <div class="row">
        <div class="col-6">
            <form action="{{ route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control" id="title">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" class="form-control" id="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina</label>
                    <input name="thumb" type="text" class="form-control" id="thumb">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="text" class="form-control" id="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input name="series" type="text" class="form-control" id="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input name="sale_date" type="text" class="form-control" id="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input name="type" type="text" class="form-control" id="type">
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <input name="artists" type="text" class="form-control" id="artists">
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input name="writers" type="text" class="form-control" id="writers">
                </div>

                <button class="btn btn-success" type="submit">Invia nuovo fumetto</button>
                <button class="btn btn-danger" type="reset">Reset</button>

            </form>
        </div>
    </div>
</div>

@endsection
