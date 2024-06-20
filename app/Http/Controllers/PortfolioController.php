<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Portfolio\PortfolioService;

class PortfolioController extends Controller
{
    public function show($url){
        $portfolio = PortfolioService::view($url);
        return view('portfolio.site', [
            'portfolio' => $portfolio
        ]);
    }
}
