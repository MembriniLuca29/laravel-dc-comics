@extends('layouts.main')

@section('page-title', 'Index di comix')

@section('main-content')
<h1>Index</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Index di comix
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <a href="{{ route('comixs.create') }}" class="btn btn-success w-100">
                + Aggiungi
            </a>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">prezzo</th>
                        <th scope="col">uscita</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comixs as $comix)
                        <tr>
                            <th scope="row">{{ $comix->id }}</th>
                            <td>{{ $comix->title }}</td>
                            <td>{{ $comix->price}}</td>
                            <td>{{ $comix->sale_date }}</td>
                            <td>
                                <a href="{{ route('comixs.show', ['comix' => $comix->id]) }}" class="btn btn-primary">
                                    Vedi
                                </a>
                                <a href="{{ route('comixs.edit', ['comix' => $comix->id]) }}" class="btn btn-warning">
                                    Modifica
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
