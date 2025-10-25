<?php

use Illuminate\Support\Facades\Route;

$prefix = [
    'namespace' => 'App\Http\Controllers\Front\API'
];
Route::group($prefix,function (){
    Route::post('/check_auth', ['uses' => 'CheckAuth@index','as' => 'check-auth']);
    Route::post('/api/get/about', ['uses' => 'About@get','as' => 'get-about']);
    Route::post('/api/skills_desc', ['uses' => 'Skills@desc','as' => 'skills-desc']);
    Route::post('/api/skills_progress', ['uses' => 'Skills@progress','as' => 'skills-progress']);
});
