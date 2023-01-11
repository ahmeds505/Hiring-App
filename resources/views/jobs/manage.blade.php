@extends('layouts.main')

@section('title', 'Manage Jobs | Hiring App')

@section('content')

    <div class="d-flex flex-column align-items-center justify-content-center m-5 p-5">
        <h1>All jobs</h1>
    
    
        <div style="width: 600px">
            @if($message = session('message'))
                <div class="alert alert-success">
                    {{$message}}
                </div>
            @endif
        

        
            <p style="color: green">Opened job ads: {{auth()->user()->getOpened()}}</p>
            <p style="color: red">Closed job ads: {{auth()->user()->getClosed()}}</p>
        

            
            @foreach($jobs as $job)
                <div class="card bg-secondary mt-4" >
                    <div class="card-body" >
                        <h5 class="card-title">{{ $job->title }}</h5>
                        @if($job->opened == 1)
                            <p style="color: green">Opened</p>
                        @else
                            <p style="color: red">Closed</p>
                        @endif
                        <p>Applications: {{$job->applications()->count()}}</p>

                        <a href="{{route('jobs.edit', $job)}}" class="btn btn-primary">Edit</a>
                        @if($job->applications->count() > 0)
                            <a href="{{route('jobs.show_applications', $job)}}" class="btn btn-primary">Show applications</a>
                        @endif
                    </div>
                </div>    
            @endforeach

        </div>

    </div>
      
@endsection