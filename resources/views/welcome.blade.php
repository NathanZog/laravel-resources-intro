<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    
    <div class="container d-flex justify-content-center mt-5">
        <h1>Photos</h1>
        <button class="btn btn-success">Create</button>
    </div>


@foreach($photo as $data)
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
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->url}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->description}}</td>
      <td>
        <button class="btn btn-info">Edit</button>
        <button class="btn btn-warning">Show</button>
        <button class="btn btn-danger">Delete</button>
    </td>
    </tr>
  </tbody>
</table>
@endforeach


    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>>

