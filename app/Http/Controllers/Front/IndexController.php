<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index($id = null){
        $data = array_merge([

        ]);
        return view('front.index', $data);
    }
}
