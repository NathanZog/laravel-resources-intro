@extends('welcome')

@section('content')


<form action="{{route('albums.update', $album->id)}}" method="post" class="container">
    @csrf

    Nom: <input type="text" value="{{$album->nom}}" name="nom">
    Date: <input type="text" value="{{$album->date}}" name="date">
    Auteur: <input type="text" value="{{$album->auteur}}" name="auteur">
    Profession Auteur: <input type="text" value="{{$album->professionAuteur}}" name="professionAuteur">
    Age: <input type="text" value="{{$album->age}}" name="age">
    Description: <input type="text" value="{{$album->description}}" name="description">
    @method("PUT")
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection