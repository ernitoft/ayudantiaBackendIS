<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['api', 'auth'])->group(function (){
    Route::controller(\App\Http\Controllers\AuthController::class)->group(function (){
        Route::post('login', 'login')->withoutMiddleware(['api', 'auth']);;
        Route::post('logout', 'logout');
        Route::get('user', 'UserLogged');
    });
});