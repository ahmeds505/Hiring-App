<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>Login | Hiring App</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Hiring App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li> --}}
              
            </ul>
            {{-- <form class="d-flex " role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success me-2" type="submit">Search</button>
            </form> --}}
            <form class="d-flex " >
                <button class="btn btn-primary me-2" type="button"><a href="{{ route('login') }}" class="text-white text-decoration-none">Login</a></button>
                {{-- <button class="btn btn-success me-2" type="button"><a href="{{ route('register') }}" class="text-white text-decoration-none">Register</a></button> --}}
            </form>
          </div>
        </div>
    </nav>

    <div class="auth-wrapper d-flex bg-light p-5">
        <div class="col-md-4 m-auto" >
            <div class="bg-secondary shadow-sm mt-5" >
                <h1 class="border-bottom p-4">Login</h1>
    
                <div class="px-4 pt-4" >
    
                    <form action="{{ route('login') }}" method="POST" >
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" />
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" />
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" value="true" id="customCheck1">
                                <label class="custom-control-label text-black-50" for="customCheck1">Remember me</label>
                            </div>
                            <a href="{{ route('password.request')}}">Forget your password?</a>
                        </div>
                        <div class="mt-4 d-grid">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                            <div class="text-center py-4 text-muted">
                                Don't have account?
                                <a href="{{ route('register') }}" class="text-muted font-weight-bold text-decoration-none">Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>