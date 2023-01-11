<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>@yield('title', 'Hiring App')</title>
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
                <a class="nav-link @if(request()->segment(1) === 'jobs' && request()->segment(2) === 'index') active @endif" aria-current="page" href="{{route('jobs.index')}}">Home</a>
              </li>
              <li class="nav-item">
                @if(Auth::user()->role->value === 'Client')
                  <a class="nav-link @if(request()->segment(2) === 'manage') active @endif" aria-current="page" href="{{route('jobs.manage')}}">Manage jobs</a>
                @elseif(Auth::user()->role->value === 'Admin')
                  <a class="nav-link @if(request()->segment(1) === 'users' && request()->segment(2) === 'index') active @endif" aria-current="page" href="{{route('users.index')}}">Manage users</a>

                @endif
              </li>
            </ul>
            <div>
              @if(request()->segment(2) === 'manage')
                <button class="btn btn-primary"><a href="{{ route('jobs.create') }}" class="text-white text-decoration-none">Add job</a></button>
              @elseif(request()->segment(1) === 'users' && request()->segment(2) === 'index')
                <button class="btn btn-primary"><a href="{{ route('users.create') }}" class="text-white text-decoration-none">Add user</a></button>
              @endif
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" >
                  {{ Auth::user()->name }}
                </button>
                <ul class="dropdown-menu">
                  {{-- <a class="dropdown-item " href="{{route('users.edit', Auth::user())}}">Edit profile</a> --}}
                  <form action="{{ route('logout') }}" method="POST" style="display: inline">
                    @csrf
                    <button class="dropdown-item">Logout</button>
                  </form> 
                </ul>
            </div>
          </div>
        </div>
    </nav>

    @yield('content')
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>