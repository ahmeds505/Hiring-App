@extends('layouts.public')

@section('title', 'Hiring App')

@section('content')
  <div class="mt-5 d-flex flex-column justify-content-center align-items-center p-5">
    <h1 class="border-bottom mb-5">Welcome to the Hiring App</h1>
      
    <h3 class="mt-5 mb-3">This is place where you will find your best job!</h3>
    <button class="btn btn-primary" type="button"><a href="{{ route('home') }}" class="text-white text-decoration-none">Get started</a></button>
  </div>
  
@endsection