<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    public function __invoke(){
        return view('roadmap.index');
    }
}
