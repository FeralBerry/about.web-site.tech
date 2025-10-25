<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeEdu extends Model
{
    protected $table = 'resume_education';
    protected $fillable = [
        'title_ru',
        'text_ru',
        'title_en',
        'text_en',
        'color',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
