<?php
namespace App\Services\Portfolio;
use App\Models\Portfolio;

class PortfolioService {

    public static function nameCheck($url){
        if(count(Portfolio::where('name', $url)->get()) <= 0){
            return true;
        }

        return false;
    }

    public function save(){
        dd('got here');
    }
}