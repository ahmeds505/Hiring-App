<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        if($search = request()->query('search'))
        {
            $jobs = Job::where('opened', '1')->where('title', 'like', '%' . $search . '%')->get();
        }
        else
        {
            $jobs = Job::where('opened', '1')->get();
        }

        return view('index', compact('jobs'));
    }

    public function show(Job $job)
    {
        return view('show', compact('job'));
    }
}
