<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;
    protected $fillables = [
        'user_id',
        'title',
        'description',
        'about_company',
        'salary',
        'application_link',
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'agencie_skill');
    }
}
