@extends('layouts.public')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center m-5 p-5">
        <h1>Start finding your job!</h1>

    

    
        <div class="mt-4">
            @if($message = session('message'))
                <div class="alert alert-success">
                    {{$message}}
                </div>
            @endif
        </div>

        @foreach($jobs as $job)
            <div class="card mt-4 bg-secondary" style="width: 600px">
                <div class="card-body">
                    <h5 style="font-weight: bold" class="card-title">{{ $job->title }}</h5>
                    <p>Company: {{$job->getUsersName()}}</p>
                    <p>Location: {{$job->location}}</p>
                    <p>Type: {{$job->type}}</p>
                    <p>Working hours: {{$job->working_hours}}</p>
                    <p>Salary: {{$job->salary}}</p>
                    <a class="btn btn-primary" href="{{route('show', $job)}}">Description</a>
                </div>
            </div>    
        @endforeach
        
    </div>
      
@endsection