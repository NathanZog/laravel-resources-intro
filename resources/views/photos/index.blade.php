@extends('welcome')
@section('content')
<div class="container d-flex justify-content-center mt-5">
        <h1>Photos</h1>
        <a href="{{route('photos.create')}}" class="btn btn-success">Create</a>
</div>


    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">URL</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($photos as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->url}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>
        <a href="{{route('photos.edit', $data->id)}}" class="btn btn-info">Edit</a>
        <a href="{{route('photos.show', $data->id)}}" class="btn btn-warning">Show</a>
        
        <form action="{{route('photos.destroy', $data->id)}}" method="post">
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
