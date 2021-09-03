@extends('welcome')

@section('content')
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $user->name }}</li>
            <li class="list-group-item">{{ $user->email }}</li>
            <li class="list-group-item">{{ $user->password }}</li>
            <form action="{{ route('users.show', $user->id) }}" method="post">
                @method("DELETE")
                <button class="btn btn-danger" type="submit">Delete</button>
                <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
            </form>
        </ul>
    </div>
@endsection