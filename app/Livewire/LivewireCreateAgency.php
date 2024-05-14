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
        $this->form->store($this->selectedOptions);
        session()->flash('success', 'Agency successfully created.');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.livewire-create-agency');
    }
}
