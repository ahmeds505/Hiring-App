<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title' , 'Hiring App')</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Hiring App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link @if(request()->segment(1) === 'home') active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              
            </ul>
            
            @if(request()->segment(1) == 'home')
            <div class="row">
              <form class="d-flex ">
                <input class="form-control me-2" type="search" placeholder="Search" name="search" value="{{request()->query('search')}}">
                <button class="btn btn-primary me-4" type="submit">Search</button>
              </form>
            @elseif(request()->segment(1) == '')
              <form class="d-flex" >
                  <button class="btn btn-primary me-2" type="button"><a href="{{ route('login') }}" class="text-white text-decoration-none">Login</a></button>
                  {{-- po potrebi dodati register button od strane programera, ako treba dodati admina --}}
                  {{-- <button class="btn btn-success me-2" type="button"><a href="{{ route('register') }}" class="text-white text-decoration-none">Register</a></button> --}}
              </form>
            @endif
          </div>
        </div>
      </nav>

    @yield('content')
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>