@extends('layout.main')

@section('content')

<div class="container py-5">
    <h1>Nuovo fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-6">

            @php
                $status = 'prod';
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
                    <label for="title" class="form-label">Titolo (*)</label>
                    <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}">
                    @error('title')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description">{{ old('description') }}</textarea>
                    @error('description')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Copertina (*)</label>
                    <input name="thumb" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" value="{{ old('thumb') }}">
                    @error('thumb')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo (*)</label>
                    <input name="price" type="text" class="form-control @error('price') is-invalid @enderror" id="price" value="{{ old('price') }}">
                    @error('price')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie (*)</label>
                    <input name="series" type="text" class="form-control @error('series') is-invalid @enderror" id="series" value="{{ old('series') }}">
                    @error('series')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data (*)</label>
                    <input name="sale_date" type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" value="{{ old('sale_date') }}">
                    @error('sale_date')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo (*)</label>
                    <input name="type" type="text" class="form-control @error('type') is-invalid @enderror" id="type" value="{{ old('type') }}">
                    @error('type')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti (*)</label>
                    <input name="artists" type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" value="{{ old('artists') }}">
                    @error('artists')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori (*)</label>
                    <input name="writers" type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" value="{{ old('writers') }}">
                    @error('writers')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                </div>

                <button class="btn btn-success" type="submit">Invia nuovo fumetto</button>
                <button class="btn btn-danger" type="reset">Reset</button>

            </form>
        </div>
    </div>
</div>

@endsection
