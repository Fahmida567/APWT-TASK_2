<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/signup',[RegistrationController::class,'registration'])->name('signup');
Route::post('/signup',[RegistrationController::class,'validateRegistration'])->name('signup');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginCheck'])->name('login');
Route::post('/contact',[ContactController::class,'validateContact'])->name('contact');