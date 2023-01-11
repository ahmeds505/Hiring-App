@extends('layouts.main')

@section('title','Home | Hiring App')

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center m-5 p-5">
        @if(Auth::user()->role->value == 'Admin')
            <h1>Jobs</h1>
        @elseif(Auth::user()->role->value == 'Client')
            <h1>Your opened jobs</h1>
        @endif
    

        
        @foreach($jobs as $job)
            <div class="card bg-secondary mt-4" style="width: 600px">
                <div class="card-body ">
                    <h5 class="card-title">{{ $job->title }}</h5>
                    @if(Auth::user()->role->value == 'Client')
                        <p>Applications: {{$job->applications()->count()}}</p>
                    @elseif(Auth::user()->role->value == 'Admin')
                        <p>Company: {{$job->getUsersName()}}</p>
                    @endif
                </div>
            </div>    
        @endforeach
            
    </div>
@endsection