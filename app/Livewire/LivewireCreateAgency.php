<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Skill;
use App\Livewire\Forms\CreateAgentForm;

class LivewireCreateAgency extends Component
{
    public $selectedOptions=[];
    public $skills=[];
    public CreateAgentForm $form;

    public function boot()
    {
        $allSkills =  Skill::all();
        $this->skills =  $allSkills->toArray();
    }

    public function save(){
        dump($this->selectedOptions);
        $this->selectedOptions = [];
        // $this->form->store();
        // return redirect()->route('agency.create')->with('status', 'Profile updated!');
        return redirect()->back()->with('status', 'Profile updated!');
    }

    public function render()
    {
        return view('livewire.livewire-create-agency');
    }
}
