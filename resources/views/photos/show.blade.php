@extends('welcome')

@section('content')
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $photo->url }}</li>
            <li class="list-group-item">{{ $photo->name }}</li>
            <li class="list-group-item">{{ $photo->description }}</li>
            <form action="{{ route('photos.show', $photo->id) }}" method="post">
                @method("DELETE")
                <button class="btn btn-danger" type="submit">Delete</button>
                <a class="btn btn-primary" href="{{ route('photos.edit', $photo->id) }}">Edit</a>
            </form>
        </ul>
    </div>
@endsection
