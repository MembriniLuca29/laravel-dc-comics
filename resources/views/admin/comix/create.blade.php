@extends('layouts.main')

@section('page-title', 'Crea nuovo comix')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Crea nuovo comix
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col bg-primary-subtle py-4 ">
            <form action="{{ route('comixs.store') }}" method="POST">
                @csrf

               

                <div class="mb-3">
                    {{ old('title') }}
                    <label for="title" class="form-label">Title</label>
                    <input type="text" @error('title') is-invalid @enderror class="form-control" id="title" name="title" placeholder="Enter value..." required
                    value= '{{ old("title") }}'>
                    @error('title')
                    <div class="alert alert-danger mb-4 mt-2"> 
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Src</label>
                    <input type="text" @error('thumb') is-invalid @enderror class="form-control" id="thumb" name="thumb" placeholder="Enter value..."
                    value= '{{ old("thumb") }}'>
                    @error('thumb')
                    <div class="alert alert-danger mb-4 mt-2"> 
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" @error('type') is-invalid @enderror class="form-control" id="type" name="type" placeholder="Enter value..." required 
                    value= '{{ old("type") }}'>
                    @error('type')
                    <div class="alert alert-danger mb-4 mt-2"> 
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input type="number" @error('price') is-invalid @enderror class="form-control" id="price" name="price" placeholder="Enter value..."
                    value= '{{ old("price") }}'>
                    @error('price')
                    <div class="alert alert-danger mb-4 mt-2"> 
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale date</label>
                    <input type="date" @error('sale_date') is-invalid @enderror class="form-control" id="sale_date" name="sale_date" placeholder="Enter value..." required
                    value= '{{ old("sale_date") }}'>
                    @error('sale_date')
                    <div class="alert alert-danger mb-4 mt-2"> 
                        {{ $message }}
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="series" class="form-label">series</label>
                    <input type="text" @error('series') is-invalid @enderror class="form-control" id="series" name="series" placeholder="Enter value..." 
                    value= '{{ old("series") }}'>
                    @error('series')
                    <div class="alert alert-danger mb-4 mt-2"> 
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">artists</label>
                    <input type="text"  maxlength="128" class="form-control" id="artists" name="artists" placeholder="Enter value..." 
                    value= '{{ old("artist") }}'>
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">writers</label>
                    <input type="text" maxlength="128" class="form-control" id="writers" name="writers" placeholder="Enter value..." 
                    value= '{{ old("writers") }}'>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" @error('description') is-invalid @enderror id="description" name="description" rows="3"
                    value= '{{ old("description") }}'></textarea>
                    @error('description')
                    <div class="alert alert-danger mb-4 mt-2"> 
                        {{ $message }}
                    @enderror
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