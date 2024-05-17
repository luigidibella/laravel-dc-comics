@extends('layout.main')

@section('content')

<div class="container py-5">
    <h1>Elenco dei fumetti</h1>

    @if (session('deleted'))

    <div class="alert alert-success" role="alert">
        {{ session('deleted')}}
    </div>

    @endif

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
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                    <form
                        class="d-inline"
                        action="{{ route('comics.destroy', $comic->id) }}"
                        method="POST"
                        onsubmit="return confirm('Sei sicuro di vole eliminare {{ $comic->title }}?')"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
                <h2>Nessun prodotto trovato</h2>
            @endforelse
        </tbody>
      </table>
</div>

@endsection
