<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;
use App\Services\Portfolio\PortfolioService;
use App\DataTransferObjects\PortfolioProjectDto;
use App\DataTransferObjects\PortfolioDto;
use App\Traits\Livewire;
use App\Models\PortfolioProject;
use App\Models\Portfolio;

class CreatePortfolioFormStepThree extends Form
{
    use WithFileUploads ; 

    #[Validate('required|string')]
    public $profile_img = '';
    // #[Validate('required|string|url|min:5')]
    // public $cv = '';

    public function updateFiles($id){
        $this->validate();
        // $profileImgFilePath = $this->cv->store('portfolio', 'public');

        Portfolio::find($id)->update([
            'profile_img' => $this->profile_img,
            // 'cv' => $profileImgFilePath,
        ]);

        dd('updated');
    }

}
