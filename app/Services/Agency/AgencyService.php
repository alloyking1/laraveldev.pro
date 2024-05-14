<?php
namespace App\Services\Agency;
use App\DataTransferObjects\AgencyDto;
use App\Models\Agency;

class AgencyService {
    public function create(AgencyDto $agencyDto, array $skills){
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

        $skillsCollection = collect($skills);
        $skillsId = $skillsCollection->pluck('id')->all();

        $agency->skills()->attach($skillsId);
        return $agency;
    }
}