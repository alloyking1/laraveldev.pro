<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LivewireAgencyList extends Component
{
    public function render()
    {
        return view('livewire.livewire-agency-list',[
            'userAgency' => Auth::user()->load('agency')
        ]);
    }
}
