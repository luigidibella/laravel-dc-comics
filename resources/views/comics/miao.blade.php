@extends('layout.main')

@section('content')

<div class="container py-5">
    <h1>Elenco dei fumetti</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col" style="min-width: 250px;">Descrizione</th>
            <th scope="col">Copertina</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Data</th>
            <th scope="col">Tipo</th>
            <th scope="col">artists</th>
            <th scope="col">writers</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <th scope="col">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $comic->id }}" aria-expanded="false" aria-controls="collapseTwo">
                              more info
                            </button>
                          </h2>
                          <div id="collapse{{ $comic->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $comic->description }}
                            </div>
                          </div>
                        </div>
                    </div>
                </th>
                <th scope="col"><img src="{{ $comic->thumb }}" alt="" style="max-width: 100px;"></th>
                <th scope="col">{{ $comic->price }}</th>
                <th scope="col">{{ $comic->series }}</th>
                <th scope="col">{{ $comic->sale_date }}</th>
                <th scope="col">{{ $comic->type }}</th>
                <th scope="col">{{ $comic->artists }}</th>
                <th scope="col">{{ $comic->writers }}</th>
            </tr>
            @empty
                <h2>Nessun prodotto trovato</h2>
            @endforelse
        </tbody>
      </table>
</div>

@endsection
