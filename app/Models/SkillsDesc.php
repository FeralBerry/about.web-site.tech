<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsDesc extends Model
{
    protected $table = 'skills_desc';
    protected $fillable = [
        'description_ru',
        'description_en',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
