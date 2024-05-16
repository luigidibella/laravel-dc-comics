@extends('layout.main')

@section('content')

<div class="container py-5">
    <h1>Elenco dei fumetti</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
            <tr>
                <td scope="row">{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                    <a class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @empty
                <h2>Nessun prodotto trovato</h2>
            @endforelse
        </tbody>
      </table>
</div>

@endsection
