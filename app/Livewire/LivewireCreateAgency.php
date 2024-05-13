<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Skill;
use App\Livewire\Forms\CreateAgentForm;

class LivewireCreateAgency extends Component
{

    public CreateAgentForm $form;

    public function save(){
        $this->form->store();
        return redirect()->route('agency.create')->with('status', 'Profile updated!');
    }

    public function render()
    {
        return view('livewire.livewire-create-agency',[
            'skills' =>  Skill::all()
        ]);
    }
}
