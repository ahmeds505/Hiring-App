@extends('layouts.main')

@section('title', 'Edit user | Hiring App')

@section('content')
<div class="mt-5 py-3 ">
    <div class="auth-wrapper d-flex bg-light mt-5 ">
        <div class="col-md-5 m-auto">
            <div class="bg-secondary shadow-sm">
                @if(Auth::user()->id != $user->id)
                    <h1 class="border-bottom p-4">Edit user</h1>
                @else
                    <h1 class="border-bottom p-4">Edit profile</h1>
                @endif

                <div class="container">
                    @if($message = session('message'))
                        <div class="alert alert-success">
                            {{$message}}
                        </div>
                    @endif
                </div>

                <div class="px-4 pb-4 pt-4">

                    <form action="{{route('users.update', $user)}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" />
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" />
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
                        <div class=" mb-3">
                            <label for="new_password" class="form-label">New Password</label>

                                <input id="new_password" name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" value="{{old('new_password')}}">

                                @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class=" mb-3">
                            <label for="new_password_confirmation" class="form-label">Confirm Password</label>

                                <input id="new_password_confirmation" name="new_password_confirmation" type="password" class="form-control" >
                                @error('new_password_confirmation')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="mt-4 d-grid">
                            <button type="submit" class="btn btn-block btn-primary">Update</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection