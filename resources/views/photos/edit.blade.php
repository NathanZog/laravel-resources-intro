@extends('welcome')

@section('content')


<form action="{{route('photos.update', $photo->id)}}" method="post" class="container">
    @csrf

    Url: <input type="text" value="{{$photo->url}}" name="url">
    Name: <input type="text" value="{{$photo->name}}" name="name">
    Description: <input type="text" value="{{$photo->description}}" name="description">
    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection