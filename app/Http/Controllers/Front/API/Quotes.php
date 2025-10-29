<?php

namespace App\Http\Controllers\Front\API;

use function PHPUnit\Framework\isEmpty;

class Quotes
{
    public function get(): \Illuminate\Database\Eloquent\Collection|string
    {
        $quotes = \App\Models\Quotes::all();
        if(empty($quotes)){
            return '';
        } else {
            return $quotes;
        }
    }
}
