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
                                <form
                                action="{{ route('comixs.destroy', ['comix' => $comix->id]) }}"
                                class="d-inline-block"
                                method="POST"
                                onsubmit="return confirmDelete();">
                                @csrf
                                @method('DELETE')
                                
                                <button type="button" class="btn btn-danger" onclick="openDeleteModal('{{ route('comixs.destroy', ['comix' => $comix->id]) }}')">Elimina</button>

                                    <script>
                                        function openDeleteModal(deleteUrl) {
                                            const modal = document.getElementById('confirmDeleteModal');
                                            const deleteForm = document.getElementById('deleteForm');
                                            deleteForm.action = deleteUrl;
                                            modal.style.display = 'block';
                                        }
                                    
                                        function closeDeleteModal() {
                                            const modal = document.getElementById('confirmDeleteModal');
                                            modal.style.display = 'none';
                                        }
                                    </script>
                                    
                                    
                                </form>

                            </td>
                        </tr>
                        <div id="confirmDeleteModal" class="modal" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Conferma Eliminazione</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Chiudi">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler cancellare questo elemento?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                                        <form id="deleteForm" method="POST" action="">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Elimina</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

