@extends('layouts.main')

@section('page-title', 'Modifica '.$comix->title)

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
        <div class="col bg-warning py-4">
            <form action="{{ route('comixs.store') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="thumb" class="form-label">Src</label>
                    <input type="text" maxlength="1024" class="form-control" id="thumb" name="thumb" value ='{{ $comix->thumb }}' >
                    
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" maxlength="128" class="form-control" id="title" name="title" value ='{{ $comix->title }}' required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" maxlength="16" class="form-control" id="type" name="type" value ='{{ $comix->type }}' required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="text"  class="form-control" id="price" name="price" value ='{{ $comix->price }}'>
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="date"  class="form-control" id="sale_date" name="sale_date" value ='{{ $comix->sale_date }}' required>
                </div>
                
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" maxlength="128" class="form-control" id="series" name="series" value ='{{ $comix->series }}' required>
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">artists</label>
                    <input type="text" maxlength="128" class="form-control" id="artists" name="artists" value ='{{ $comix->artist }}' required>
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">writers</label>
                    <input type="text" maxlength="128" class="form-control" id="writers" name="writers" value ='{{ $comix->writers }}' required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>


                <div>
                    <button type="submit" class="btn btn-primary w-100">
                        + Aggiungi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection