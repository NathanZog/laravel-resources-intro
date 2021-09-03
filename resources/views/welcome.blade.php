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
    
    
    

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('photos.index')}}">Photos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('albums.index')}}">Albums</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('users.index')}}">Users</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

@yield('content')





    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>

