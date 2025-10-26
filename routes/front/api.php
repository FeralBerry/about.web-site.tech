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
    Route::post('/api/resume/edu', ['uses' => 'Skills@progress','as' => 'resume-edu']);
    Route::post('/api/resume/work_exp', ['uses' => 'Skills@progress','as' => 'resume-work-exp']);
    Route::post('/api/get/portfolio', ['uses' => 'Portfolio@get','as' => 'get-portfolio']);
    Route::post('/api/get/quotes', ['uses' => 'Quotes@get','as' => 'get-quotes']);
    Route::post('/api/send_contact', ['uses' => 'Contact@send','as' => 'get-contact']);
});
