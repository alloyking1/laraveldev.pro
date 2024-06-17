<?php
namespace App\Services\Portfolio;
use App\Models\Portfolio;
use App\DataTransferObjects\PortfolioDto;

class PortfolioService {

    public static function nameCheck($url){
        if(count(Portfolio::where('name' $url)->get()) <= 0){
            return true;
        }

        return false;
    }

    public static function save(PortfolioDto $portfolioDto, $id = NULL){
        $job = Portfolio::updateOrCreate([
            'id' => $id
        ],[
            'url' => $portfolioDto->url ?? '',
            'greeting'  => $portfolioDto->$greeting ?? '', 
            'about_you' => $portfolioDto->$about_you ?? '',
            'linkedin'=> $portfolioDto->$linkedin ?? '',
            'twitter'=> $portfolioDto->$twitter ?? '',
            'github'=> $portfolioDto->$github ?? '',
            'skills'=> $portfolioDto->$skill ?? '',
        ]);
    }
}