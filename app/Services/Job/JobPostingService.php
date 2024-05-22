<?php
namespace App\Services\Job;
use App\Models\JobPosting;
use App\DataTransferObjects\JobPostingDto;

class JobPostingService {

    public function create(JobPostingDto $jobDto, $id = NULL){
        $agency = JobPosting::updateOrCreate([
            'id' => $id
        ],[
            'user_id' => $jobDto->user_id,
            'title' =>  $jobDto->title,
            'description' =>  $jobDto->description,
            'about_company' =>  $jobDto->about_company,
            'salary' =>  $jobDto->salary,
            'application_link' =>  $jobDto->application_link,
            'logo' =>  $jobDto->logo,
        ]);

        $skillsCollection = collect($jobDto->skills);
        $skillsId = $skillsCollection->pluck('id')->all();

        $agency->skills()->sync($skillsId);
        return $agency;
    }

    public function find($id){
        return  JobPosting::find($id);
    }

    public function delete($id){
        $agency = JobPosting::find($id);
        $agency->delete();
        return $agency;
    }
}