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
    <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg bg-light">  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Main</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('about.index')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('contact.index')}}">Contacts</a>
        </li>
              </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    
    @yield('content')
    </div>
</body>
</html>