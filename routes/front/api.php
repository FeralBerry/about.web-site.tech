<?php

use Illuminate\Support\Facades\Route;

$prefix = [
    'namespace' => 'App\Http\Controllers\Front\API'
];
Route::group($prefix,function (){
    Route::post('/check_auth', ['uses' => 'CheckAuth@index','as' => 'check-auth']);
});
