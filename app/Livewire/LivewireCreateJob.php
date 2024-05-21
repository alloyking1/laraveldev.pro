<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LivewireCreateJob extends Component
{
    public function render()
    {
        return view('livewire.livewire-create-job',[
            'userJobs' => Auth::user()->load(['jobs' => function($query){
                $query->orderBy('created_at', 'desc');
            }])
        ])
        ->layout('layouts.app');
    }
}
