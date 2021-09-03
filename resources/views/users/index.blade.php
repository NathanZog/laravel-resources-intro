@extends('welcome')
@section('content')
    <div class="container d-flex justify-content-center mt-5">
        <h1>Users</h1>
        <a href="{{ route('users.create') }}" class="btn btn-success">Create</a>
    </div>


    <table class="table mt-5 container">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->password }}</td>
                    <td>
                        <a href="{{ route('users.edit', $data->id) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('users.show', $data->id) }}" class="btn btn-warning">Show</a>

                        <form action="{{ route('users.destroy', $data->id) }}" method="post">
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
