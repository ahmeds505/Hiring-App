@extends('layouts.public')


@section('title', 'Description | Hiring App')

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center mt-5 ">
    <div class="col-md-5 bg-secondary mt-5 p-5">
        <div class="mb-4">
            <h1 class="border-bottom">{{$job->title}}</h1>

        </div>

            
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{$job->location}}" readonly>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$job->type}}" readonly>
        </div>
        <div class="mb-3">
            <label for="working_hours" class="form-label">Working hours</label>
            <input type="text" class="form-control" id="working_hours" name="working_hours" value="{{$job->working_hours}}" readonly>
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="text" class="form-control" id="salary" name="salary" value="{{$job->salary}}" readonly>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="description" name="description" readonly>{{$job->description}}</textarea>
        </div>
        
        
        <div class="mb-3"> 
            <a href="{{route('applications.create', $job)}}" class="btn btn-primary">Apply for this job</a>
        </div>
    </div>
    
</div>
@endsection