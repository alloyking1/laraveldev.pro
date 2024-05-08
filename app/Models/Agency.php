<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'type',
        'headquarters',
        'size',
        'project_size',
        'website',
        'video',
        'featured_img',
        'short_description',
        'about_company',
        'about_video',
        'logo',
    ];
    protected $cast = [
        'status' => 'boolean'
    ];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'agency_id');
    }
}
