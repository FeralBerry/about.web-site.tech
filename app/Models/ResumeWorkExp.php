<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeWorkExp extends Model
{
    protected $table = 'resume_work_exp';
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
