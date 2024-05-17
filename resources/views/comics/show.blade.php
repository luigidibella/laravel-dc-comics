@extends('layout.main')

@section('content')

<div class="container py-5 d-flex align-items-center min-vh-100">
    <div class="row row-cols-2 mx-auto">
        <div class="col d-flex justify-content-center align-items-center">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="max-width: 400px;">
        </div>
        <div class="col d-flex flex-column justify-content-center">
            <h1>{{ $comic->title }} <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a></h1>
            <p>{{ $comic->description }}</p>
            <div class="d-flex">
                <p>{{ $comic->price }}/</p>
                <p>{{ $comic->series }}/</p>
                <p>{{ $comic->sale_date }}/</p>
                <p>{{ $comic->type }}/</p>
            </div>
            <p>{{ $comic->artists }}</p>
            <p>{{ $comic->writers }}</p>
        </div>
    </div>
</div>

@endsection
