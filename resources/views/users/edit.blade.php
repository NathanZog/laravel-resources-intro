@extends('welcome')

@section('content')


<form action="{{route('users.update', $user->id)}}" method="post" class="container">
    @csrf

    Name: <input type="text" value="{{$user->name}}" name="url">
    Email: <input type="text" value="{{$user->email}}" name="name">
    Password: <input type="text" value="{{$user->password}}" name="description">
    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection