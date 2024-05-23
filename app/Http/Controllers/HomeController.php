<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Job\JobPostingService;
use App\Services\Agency\AgencyService;

class HomeController extends Controller
{
    public function index(JobPostingService $job, AgencyService $agency)
    {
        return view('home.index',[
            'jobs' => $job->all(),
            'agencies' => $agency->all(),
        ]);
    }
}
