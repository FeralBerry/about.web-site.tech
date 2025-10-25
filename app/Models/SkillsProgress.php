<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsProgress extends Model
{
    protected $table = 'skills_progressive';
    protected $fillable = [
        'name',
        'percent',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
