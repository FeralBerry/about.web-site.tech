<?php

use Illuminate\Support\Facades\Route;

$prefix = [
    'namespace' => 'App\Http\Controllers\Front\API',
    'prefix' => 'api'
];
Route::group($prefix,function (){
    Route::post('/main/portfolio',['uses' => 'Portfolio@mainGet', 'as' => 'portfolio-main-get']);
    Route::post('/get/reviews',['uses' => 'Reviews@mainGet', 'as' => 'reviews-main-get']);
    Route::post('/main/blog',['uses' => 'Blog@mainGet', 'as' => 'blog-main-get']);
    Route::post('/blog',['uses' => 'Blog@get', 'as' => 'blog-get']);
    //Route::post('/sendMessage',['uses' => 'TelegramBot@sendMessage', 'as' => 'telegram-message']);
    Route::post('/send/contact/form',['uses' => 'Contact@sendContact', 'as' => 'send-contact']);
    Route::post('/send/hire/form',['uses' => 'Contact@sendHire', 'as' => 'send-hire']);
});
