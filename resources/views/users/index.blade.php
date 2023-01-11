@extends('layouts.main')

@section('title', 'Manage users | Hiring App')

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center mt-5 pt-5">
        <h1>Users</h1>
    </div>

    

    <div class="container">
        @foreach($users as $user)
            <div class="card mt-4">
                <div class="card-body ">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    {{-- <a href="{{route('users.edit', $user)}}" class="btn btn-primary">Edit</a> --}}
                    <form action="{{route('users.delete', $user)}}" onsubmit="return confirm('This user will be removed permanently! Are you sure?')" method="POST" class="form-group mt-3" style="display: inline">
                        @csrf
                        @method('delete')
                        
                        <button class="btn btn-danger" >Delete</button>
                    </form>
                </div>
            </div>    
        @endforeach
        
    </div>


@endsection