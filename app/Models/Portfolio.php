<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';
    protected $fillable = [
        'base_img',
        'text'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
