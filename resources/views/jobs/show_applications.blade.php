@extends('layouts.main')

@section('title', 'Applications | Hiring App')

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center mt-5 p-5">
        <h1>{{$job->title}} applications:</h1>
    

        <div class="col-md-5">
            @if($message = session('message'))
                <div class="alert alert-success">
                    {{$message}}
                </div>
            @endif
        </div>

    
    
        @foreach($job->applications as $application)
            
            <div class="col-md-5 bg-secondary mt-3 p-3" >
                    
                <div class="form-group mt-3">
                    First Name: {{$application->first_name}}
                </div>
                
                <div class="form-group mt-3">
                    Last Name: {{$application->last_name}}
                </div>

                <div class="form-group mt-3">
                    Email: {{$application->email}}
                </div>
                
                <div class="form-group mt-3">
                    Phone number: {{$application->phone_number}}
                </div>
                
                <div class="form-group mt-3">
                    About: {{$application->about}}
                </div>
                
                <div class="form-group mt-3">
                    Education: {{$application->education}}
                </div>
                
                <div class="form-group mt-3">
                    Skills: {{$application->skills}}
                </div>
                
                <div class="form-group mt-3">
                    Experience: {{$application->experience}}
                </div>
                
                <form action="{{route('applications.delete', $application)}}" onsubmit="return confirm('Your application will be removed permanently! Are you sure?')" method="POST" class="form-group mt-3">
                    @csrf
                    @method('delete')
                    
                    <button class="btn btn-danger" >Delete application</button>
                </form>
                
            </div>
            

        @endforeach
    </div>
@endsection