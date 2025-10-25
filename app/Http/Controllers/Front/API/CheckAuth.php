<?php

namespace App\Http\Controllers\Front\API;

use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    public function index(): int
    {
        if(Auth::user())
        {
            return 1;
        }
        return 0;
    }
}
