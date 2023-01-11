@extends('layouts.public')

@section('title', 'Apply | Hiring App')

@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center m-5 p-5">

        <div class="col-md-5 bg-secondary p-5">
            <h1>Apply for this job:</h1>
            <h2 class="border-bottom" style="font-weight: bold">{{$job->title}}</h2>

        
    
            <div class="mt-4">
                <form action="{{route('applications.store')}}" method="POST">
                    @csrf

                    <div class="form-group mt-3">
                        <input type="hidden" class="form-control" id="job_id" name="job_id" value="{{$job->id}}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="first_name">First Name</label>
                        <input class="form-control @error('first_name') is-invalid @enderror" id="first_name" name="first_name">
                    </div>
                    <div >
                        @error('first_name')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="last_name">Last Name</label>
                        <input class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name">
                    </div>
                    <div >
                        @error('last_name')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                    </div>
                    <div >
                        @error('email')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone_number">Phone number</label>
                        <input class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number">
                    </div>
                    <div >
                        @error('phone_number')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                    <label for="about">About you</label>
                    <textarea class="form-control @error('about') is-invalid @enderror" id="about" name="about" ></textarea>
                    </div>
                    <div >
                        @error('about')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                    <label for="education">Education</label>
                    <textarea class="form-control @error('education') is-invalid @enderror" id="education" name="education"></textarea>
                    </div>
                    <div >
                        @error('education')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="skills">Skills</label>
                        <textarea class="form-control @error('skills') is-invalid @enderror" id="skills" name="skills"></textarea>
                    </div>
                    <div >
                        @error('skills')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="experience">Experience</label>
                        <textarea class="form-control @error('experience') is-invalid @enderror" id="experience" name="experience"></textarea>
                    </div>
                    <div >
                        @error('experience')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary" type="submit">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection