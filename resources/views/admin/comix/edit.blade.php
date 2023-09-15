@extends('layouts.main')

@section('page-title', 'modifica' .$comix->title)

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                modifica {{ $comix->title }}
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col bg-primary py-4">
            <form action="{{ route('comixs.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="thumb" class="form-label">Src</label>
                    <input type="text" maxlength="1024" class="form-control" id="thumb" name="thumb" placeholder="Enter value...">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" maxlength="128" class="form-control" id="title" name="title" placeholder="Enter value..." required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" maxlength="16" class="form-control" id="type" name="type" placeholder="Enter value..." required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="number" min="0.00" max="200" class="form-control" id="price" name="price" placeholder="Enter value...">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="date"  class="form-control" id="sale_date" name="sale_date" placeholder="Enter value..." required>
                </div>
                
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" maxlength="128" class="form-control" id="series" name="series" placeholder="Enter value..." required>
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">artists</label>
                    <input type="text" maxlength="128" class="form-control" id="artists" name="artists" placeholder="Enter value..." required>
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">writers</label>
                    <input type="text" maxlength="128" class="form-control" id="writers" name="writers" placeholder="Enter value..." required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>


                <div>
                    <button type="submit" class="btn btn-success w-100">
                        + Aggiungi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection