@extends('layouts/main')

@section('content')
    <div class="container">
        <h1 class="mb-5">OUR COMICS</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Series</th>
                    <th>Type</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-success"href="{{ route('comics.show', $comic->id) }}">SHOW</a>
                        </td>
                        <td>
                            <a href="">EDIT</a>
                        </td>
                        <td>
                            <a href="">DELETE</a>
                        </td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection