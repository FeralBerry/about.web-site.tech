<?php

use Illuminate\Support\Facades\Route;

include 'api.php';

$prefix = [
    'namespace' => 'App\Http\Controllers\Front'
];
Route::group($prefix,function (){
    Route::get('/', ['uses' => 'IndexController@index','as' => 'front-index']);
});

