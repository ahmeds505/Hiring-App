<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use Illuminate\Support\Facades\Route;

class JobController extends Controller
{
    public function index()
    {
        if(auth()->user()->role === Role::Client)
        {
            $jobs = auth()->user()->jobs()->latest()->where('opened', '1')->get();

        }
        else
        {
            $jobs = Job::latest()->get();
            
        }


        return view('jobs.index', compact('jobs'));

    }

    public function create()
    {
        $job = new Job;

        return view('jobs.create', compact('job'));
    }

    public function store(JobRequest $request)
    {
        $request->user()->jobs()->create($request->all());

        return redirect()->route('jobs.manage')->with('message', 'Job has been added successfully!');
    }

    public function edit(Job $job)
    {

        return view('jobs.edit', compact('job'));
    }

    public function update(JobRequest $request, Job $job)
    {
        $job->update($request->all());

        return redirect()->route("jobs.manage")->with('message', 'Job has been updated successfully!');
        // dd(Route::currentRouteName());
    }

    public function manage()
    {
        $jobs = auth()->user()->jobs()->get();


        return view('jobs.manage', compact('jobs'));
    }

    public function showApplications(Job $job)
    {
        return view('jobs.show_applications', compact('job'));
    }

}
