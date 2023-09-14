@extends('layouts.main')

@section('page-title', $comix->title)

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                {{ $comix->title }}
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <img src="{{ $comix->thumb }}" class="card-img-top" style="max-height: 800px;" alt="{{ $comix->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $comix->title }}</h5>
                    <p class="card-text">
                        <div>
                            {{ $comix->description }} 
                        </div>
                        <div>
                           price: {{ $comix->price }}$
                        </div>
                        <div>
                            series: {{ $comix->series }}
                        </div>
                        <div>
                            sale date: {{ $comix->sale_date }}
                        </div>
                        <div>
                            type: {{ $comix->type }}
                        </div>
                        <div>
                            artist: {{ $comix->artist }}
                        </div>
                        <div>
                            writers: {{ $comix->writers }}
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection