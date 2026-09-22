<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/websites', [WebsiteController::class, 'index'])->name('websites');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login.login', function () {
    return view('login');
})->name('login');

Route::get('/login.register', function () {
    return view('register');
})->name('register');




Route::resource('/projects',WebsiteController::class);


