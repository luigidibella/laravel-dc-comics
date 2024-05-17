@extends('layout.main')

@section('content')

<div class="container py-5">
    <h1>Nuovo fumetto</h1>
    <div class="row">
        <div class="col-6">

            @php
                $status = 'test';
                $title = '';
                $description = '';
                $thumb = '';
                $price = '';
                $series = '';
                $sale_date = '';
                $type = '';
                $artists = '';
                $writers = '';
                if($status == 'test'){
                    $title = 'test';
                    $description = 'test';
                    $thumb = 'test';
                    $price = 'test';
                    $series = 'test';
                    $sale_date = 'test';
                    $type = 'test';
                    $artists = 'test';
                    $writers = 'test';
                }
            @endphp

            <form action="{{ route('comics.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ $title }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" class="form-control" id="description">{{ $title }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina</label>
                    <input name="thumb" type="text" class="form-control" id="thumb" value="{{ $title }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="text" class="form-control" id="price" value="{{ $title }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input name="series" type="text" class="form-control" id="series" value="{{ $title }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data</label>
                    <input name="sale_date" type="text" class="form-control" id="sale_date" value="{{ $title }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input name="type" type="text" class="form-control" id="type" value="{{ $title }}">
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <input name="artists" type="text" class="form-control" id="artists" value="{{ $title }}">
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input name="writers" type="text" class="form-control" id="writers" value="{{ $title }}">
                </div>

                <button class="btn btn-success" type="submit">Invia nuovo fumetto</button>
                <button class="btn btn-danger" type="reset">Reset</button>

            </form>
        </div>
    </div>
</div>

@endsection
