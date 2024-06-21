<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\CreatePortfolioFormStepTwo;
use App\Models\PortfolioProject;
use App\Models\Portfolio;
use Livewire\WithFileUploads;

class LivewireEditPortfolioStepTwo extends Component
{
    use WithFileUploads;
    public $id;
    public $portfolio;
    public $project_img;
    
    public CreatePortfolioFormStepTwo $stepTwoForm;

    public function mount($id){
        $this->id = $id;
        $this->portfolio = Portfolio::with('projects')->find($this->id);
    }

    public function addProject(){
        $this->stepTwoForm->project_img = $this->project_img->store('portfolio', 'public');
        $this->stepTwoForm->addPortfolioProject($this->portfolio->id);
    }

    public function deleteProject($projectId){
        PortfolioProject::find($projectId)->delete();
    }
 
    public function render()
    {
        return view('livewire.livewire-edit-portfolio-step-two',[
            'portfolio' => $this->portfolio
        ]);
    }
}
