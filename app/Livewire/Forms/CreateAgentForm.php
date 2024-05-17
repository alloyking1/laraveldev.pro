<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Services\Agency\AgencyService;
use App\DataTransferObjects\AgencyDto;
use App\Models\Agency;
use Livewire\WithFileUploads;

class CreateAgentForm extends Form
{
    use WithFileUploads;

    #[Validate('required|string|min:5')]
    public $name = '';
    #[Validate('required|email|min:5')]
    public $email = '';
    #[Validate('required|string|min:5')]
    public $type ='';
    #[Validate('required|string|min:2')]
    public $headquarters ='';
    #[Validate('required|string|min:5')]
    public $size ='';
    #[Validate('required|string|min:5')]
    public $project_size ='';
    #[Validate('required|string|min:5')]
    public $website ='';
    #[Validate('required|string|min:5')]
    public $video = '';
    #[Validate('image|max:1024')]
    public $feature_img = '';
    #[Validate('required|string|min:5')]
    public $short_description ='';
    #[Validate('required|string|min:5')]
    public $about_company ='';
    #[Validate('image|max:1024')]
    public $logo = '';

    public ?Agency $agency;

    public function setValue(Agency $agency)
    {
        $this->agency = $agency; //remove later
        $this->name = $agency->name;
        $this->email = $agency->email;
        $this->type = $agency->type;
        $this->headquarters = $agency->headquarters;
        $this->size = $agency->size;
        $this->project_size = $agency->project_size;
        $this->website = $agency->website;
        $this->video = $agency->video;
        $this->feature_img = $agency->feature_img;
        $this->short_description = $agency->short_description;
        $this->about_company = $agency->about_company;
        $this->logo = $agency->logo;
    }

    public function store($multiSelect, $id = NULL) 
    {
        $this->validate();
        if($multiSelect === [] | $multiSelect === null){
            dd('handle validation error display');
        }
        dd($this->imgUpload());

        // $agencyService = new AgencyService();
        // $agencyService->create(AgencyDto::fromPostRequest($this->all()), $multiSelect, $id);

        $this->reset(); 
    }

    public function imgUpload(){
        return $this->feature_img->store(path: 'photos');
    }
}
