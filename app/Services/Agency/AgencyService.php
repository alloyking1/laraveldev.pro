<?php
namespace App\Services\Agency;
use App\DataTransferObjects\AgencyDto;
use App\Models\Agency;

class AgencyService {
    public function create(AgencyDto $agencyDto){
        $agency = Agency::create([
            'user_id' => $agencyDto->user_id,
            'name' =>  $agencyDto->name,
            'email' =>  $agencyDto->email,
            'type' =>  $agencyDto->type,
            'headquarters' =>  $agencyDto->headquarters,
            'size' =>  $agencyDto->size,
            'project_size' =>  $agencyDto->project_size,
            'website' =>  $agencyDto->website,
            'video' =>  $agencyDto->video,
            'feature_img' =>  $agencyDto->feature_img,
            'short_description' =>  $agencyDto->short_description,
            'about_company' =>  $agencyDto->about_company,
            'about_video' =>  $agencyDto->about_video,
            'logo' =>  $agencyDto->logo,
        ]);
        $skills = [1,2,3]; //coming form multi select form
        $agency->skills()->attach($skills);
        return $agency;
    }
}