<?php

namespace App\Livewire;

use Livewire\Component;
use App\Model\Portfolio;
use App\Services\Portfolio\PortfolioService;
use Livewire\WithFileUploads;
use App\Livewire\Forms\CreatePortfolioForm;

class LivewireCreatePortfolioStepOne extends Component
{
    use WithFileUploads;

    public $url;
    public $availableName;
    public CreatePortfolioForm $form;

    public function urlCheck(){
        $available = PortfolioService::nameCheck($this->url);

        if($available){
            return $this->availableName = true;
        }

        return $this->availableName = false;
    }

    public function save(){
        $this->form->url = $this->url;
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.livewire-create-portfolio-step-one');
    }
}
