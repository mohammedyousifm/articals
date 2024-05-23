<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;


// this Route::controller is for the home pages part
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home.index');
    Route::get('/single.articles', 'singlearticles')->name('single.articles');
});

// this Route::controller is for the Users  pages part
Route::controller(UsersController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile.index');
    Route::get('/login', 'login')->name('login.index');
    Route::get('/register', 'register')->name('register.index');
});
