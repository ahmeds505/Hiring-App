<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Application;
use App\Http\Requests\ApplicationRequest;


class ApplicationController extends Controller
{
    public function create(Job $job)
    {
        $application = new Application;


        return view('applications.create', compact('application', 'job'));
    }

    public function store(ApplicationRequest $request)
    {
        $job = Job::find($request->job_id);

        $job->applications()->create($request->all());

        return redirect()->route('home')->with('message', 'Your application was sent successfully');

    }

    public function destroy(Application $application)
    {
        $application->delete();

        return redirect()->back()->with('message', 'Application was deleted successfully!');
    }
}