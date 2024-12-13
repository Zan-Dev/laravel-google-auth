<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');

Route::get('/', function(){
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/profile', function(){
    return view('profile');
})->name('profile')->middleware('auth');

Route::get('/redirect', [SocialiteController::class, 'redirect'])->name('redirect');
Route::get('/callback', [SocialiteController::class, 'callback'])->name('callback');
Route::post('/logout', [SocialiteController::class, 'logout'])->name('logout')->middleware('auth');   