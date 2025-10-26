<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    protected $table = 'quotes';
    protected $fillable = [
        'text_ru',
        'text_en',
        'author_ru',
        'author_en',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
