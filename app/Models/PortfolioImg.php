<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioImg extends Model
{
    protected $table = 'portfolio_img';
    protected $fillable = [
        'img',
        'portfolio_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
