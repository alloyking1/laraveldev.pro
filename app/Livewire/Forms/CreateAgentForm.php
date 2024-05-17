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
    public $name = 'dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('required|email|min:5')]
    public $email = 'dlskdfldjlj@dklksflkd.cm';
    #[Validate('required|string|min:5')]
    public $type ='dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('required|string|min:2')]
    public $headquarters ='dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('required|string|min:5')]
    public $size ='dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('required|string|min:5')]
    public $project_size ='dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('required|string|min:5')]
    public $website ='dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('required|string|min:5')]
    public $video = 'dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('required|image|max:1024')]
    public $feature_img = '';
    #[Validate('required|string|min:5')]
    public $short_description ='dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('required|string|min:5')]
    public $about_company ='dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('string|max:1024')]
    public $logo = 'dfksfjsldjflsfjlsdlksjfdksjdjsldjsfsfsdfsdflk fjsldfjs djfls djl';
    #[Validate('required|array|max:1024')]
    public $selectedOptions = [];

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

    public function store($id = NULL) 
    {
        $this->validate();
        $imgPath = $this->imgUpload(); //move into a trait
        $agencyService = new AgencyService();
        $agencyService->create(AgencyDto::fromPostRequest($this->all()), $id);

        $this->reset(); 
    }

    public function imgUpload(){
        return $this->feature_img = $this->feature_img->store('logo', 'public');
        
    }
}
