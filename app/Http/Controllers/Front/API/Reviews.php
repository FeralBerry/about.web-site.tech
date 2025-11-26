<?php

namespace App\Http\Controllers\Front\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Reviews
{
    public function mainGet(){
        return DB::table('reviews')->get();
    }
}
