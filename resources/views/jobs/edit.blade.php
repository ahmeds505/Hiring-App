@extends('layouts.main')

@section('title', 'Edit Job | Hiring App')

@section('content')
    

    <div class="container d-flex flex-column align-items-center justify-content-center m-5 p-5">
        <div class="col-md-5 bg-secondary p-5">
            <h1 class="border-bottom">Edit job</h1>
    
            <div class="mt-4">
                <form action="{{ route('jobs.update', $job) }}" method="POST">
                    @csrf
    
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{$job->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{$job->location}}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{$job->type}}">
                    </div>
                    <div class="mb-3">
                        <label for="working_hours" class="form-label">Working hours</label>
                        <input type="text" class="form-control" id="working_hours" name="working_hours" value="{{$job->working_hours}}">
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="text" class="form-control" id="salary" name="salary" value="{{$job->salary}}">
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Description</label>
                      <textarea type="text" class="form-control" id="description" name="description">{{$job->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Opened</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="opened"
                                    id="job_opened_no" value="0" @if (old('job.opened', $job->opened) == 0) checked @endif >
                                <label class="form-check-label" for="job_opened_no">No</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="opened"
                                    id="job_opened_yes" value="1" @if (old('job.opened', $job->opened) == 1) checked @endif>
                                <label class="form-check-label" for="job_opened_yes">Yes</label>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>
        
    </div>
      
@endsection