@extends('welcome')

@section('content')
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $album->nom }}</li>
            <li class="list-group-item">{{ $album->date }}</li>
            <li class="list-group-item">{{ $album->auteur }}</li>
            <li class="list-group-item">{{ $album->professionAuteur }}</li>
            <li class="list-group-item">{{ $album->age }}</li>
            <li class="list-group-item">{{ $album->description }}</li>
            <form action="{{ route('albums.show', $album->id) }}" method="post">
                @method("DELETE")
                <button class="btn btn-danger" type="submit">Delete</button>
                <a class="btn btn-primary" href="{{ route('albums.edit', $album->id) }}">Edit</a>
            </form>
        </ul>
    </div>
@endsection
