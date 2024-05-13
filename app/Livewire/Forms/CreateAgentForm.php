<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Services\Agency\AgencyService;
use App\DataTransferObjects\AgencyDto;

class CreateAgentForm extends Form
{
    #[Validate('required|string|min:5')]
    public $name = 'this is the text just for testing purpose';
    #[Validate('required|email|min:5')]
    public $email = 'thisisthetexjust@or.testing';
    #[Validate('required|string|min:5')]
    public $type ='this is the text just for testing purpose';
    #[Validate('required|string|min:2')]
    public $headquarters ='this is the text just for testing purpose';
    #[Validate('required|string|min:5')]
    public $size ='this is the text just for testing purpose';
    #[Validate('required|string|min:5')]
    public $project_size ='this is the text just for testing purpose';
    #[Validate('required|string|min:5')]
    public $website ='this is the text just for testing purpose';
    #[Validate('required|string|min:5')]
    public $video = 'this is the text just for testing purpose';
    #[Validate('required|string|min:5')]
    public $feature_img = 'this is the text just for testing purpose';
    #[Validate('required|string|min:5')]
    public $short_description ='this is the text just for testing purpose';
    #[Validate('required|string|min:5')]
    public $about_company ='this is the text just for testing purpose';
    #[Validate('required|string|min:5')]

    // ------> This is the <---------
    // public $about_video = 'this is the text just for testing purpose';
    // #[Validate('string|min:5')]
    public $logo = 'this is the text just for testing purpose';
    // #[Validate('required|string|min:5')]
    // public $grade ='';

    public function store() 
    {
        $this->validate();
        $agencyService = new AgencyService();
        $agencyService->create(AgencyDto::fromPostRequest($this->all()));
    }

    public function update(){

    }
}
