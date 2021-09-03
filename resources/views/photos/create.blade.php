@extends('welcome')

@section('content')
<form action="{{route('photos.store')}}" method="post" class="container mt-5">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">url</label>
    <input type="text" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input type="text" name="name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description</label>
    <textarea name="description" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection