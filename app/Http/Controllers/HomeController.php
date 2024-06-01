<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Job\JobPostingService;
use App\Services\Agency\AgencyService;
use App\Observers\Job\JobScraperObserver;
use Spatie\Crawler\Crawler;

class HomeController extends Controller
{
    public function index(JobPostingService $job, AgencyService $agency)
    {
        // $url = "https://laraveljobs.com";

        // $crawledData = Crawler::create()
        //     ->setCrawlObserver(new JobScraperObserver())
        //     ->setMaximumDepth(0)
        //     ->setTotalCrawlLimit(1)
        //     ->startCrawling($url);

        return view('home.index',[
            'jobs' => $job->recentJobs(2),
            'agencies' => $agency->featured(2),
        ]);
    }
}
