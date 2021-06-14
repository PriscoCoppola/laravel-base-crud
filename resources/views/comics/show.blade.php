@extends('layouts/main')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="mb-5">
            {{ $comic->type }}
            <span class="badge bg-primary">{{ $comic->price }}€</span>
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                {{ $comic->description }}
            </div>
        </div>

        <a href="{{ route('comics.index') }}">Back to archive</a>
    </div>
@endsection