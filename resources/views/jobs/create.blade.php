@extends('layouts.main')

@section('title', 'Add Job | Hiring App')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center m-5 p-5">
        <div class="col-md-5 bg-secondary mt-5 p-5">
            <h1 class="border-bottom mb-4">Add new job</h1>
    

            <form action="{{ route('jobs.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                    @error('title')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{old('location')}}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
                </div>
                <div class="mb-3">
                    <label for="working_hours" class="form-label">Working hours</label>
                    <input type="text" class="form-control" id="working_hours" name="working_hours" value="{{old('working_hours')}}">
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" value="{{old('salary')}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"></textarea>
                    @error('description')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    
                </div>
                
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        
    </div>
      
@endsection