@extends('welcome')
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <h1>Albums</h1>
        <a href="{{ route('albums.create') }}" class="btn btn-success">Create</a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Date</th>
                <th scope="col">Auteur</th>
                <th scope="col">Profession Auteur</th>
                <th scope="col">Age</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->nom }}</td>
                    <td>{{ $data->date }}</td>
                    <td>{{ $data->auteur }}</td>
                    <td>{{ $data->professionAuteur }}</td>
                    <td>{{ $data->age }}</td>
                    <td>{{ $data->description }}</td>
                    <td>
                        <a href="{{ route('albums.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('albums.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('albums.destroy', $data->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
