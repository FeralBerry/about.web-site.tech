<?php

namespace App\Http\Controllers\Front\API;

use App\Models\About as A;
use function PHPUnit\Framework\isEmpty;


class About
{
    public function get(): \Illuminate\Database\Eloquent\Collection|string
    {
        $about = A::all()->take(1);
        if(!isEmpty($about)){
            return '';
        } else {
            return $about;
        }
    }
}
