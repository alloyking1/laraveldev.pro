<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;
use App\Services\Portfolio\PortfolioService;
use App\DataTransferObjects\PortfolioDto;

class CreatePortfolioForm extends Form
{
    use WithFileUploads;

    #[Validate('required|string')]
    public $url = '';
    #[Validate('required|string|min:5')]
    public $greeting = '';
    #[Validate('required|string|min:5')]
    public $about_you = '';
    #[Validate('required|string|min:5')]
    public $linkedin = '';
    #[Validate('required|string|min:5')]
    public $twitter = '';
    #[Validate('required|string|min:5')]
    public $github = '';
    #[Validate('required|string|min:3')]
    public $skills = '';

    // #[Validate('required|string|min:5')]
    // public $application_link ='';
    // #[Validate('nullable|sometimes|image|max:1024')]
    // public $logo = '';
    // #[Validate('required|array|max:1024')]
    // public $selectedOptions = [];

    // public function setValue(JobPosting $jobPosting)
    // {
    //     $this->jobPosting = $jobPosting; //remove later
    //     $this->company_name = $jobPosting->company_name;

    //     $this->title = $jobPosting->title;
    //     $this->contract = $jobPosting->contract;
    //     $this->location = $jobPosting->location;

    //     $this->description = $jobPosting->description;
    //     $this->type = $jobPosting->type;
    //     $this->about_company = $jobPosting->about_company;
    //     $this->salary = $jobPosting->salary;
    //     $this->application_link = $jobPosting->application_link;
    // }

    public function store($id = NULL, $logo = NULL) 
    {
        $this->validate();
        $agencyService = PortfolioService::save(PortfolioDto::fromPostRequest($this->all()), $id);
        $this->reset(); 
    }
}
