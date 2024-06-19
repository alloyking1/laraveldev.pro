<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProject extends Model
{
    use HasFactory;
    protected $fillable = ['portfolio_id', 'name', 'description', 'img', 'link'];
}
