<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('register');
});
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/inbox', function () {
    return view('inbox');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/registration',[AuthController::class, 'viewRegister'])->name('register.view');
Route::post('/registration/submit',[AuthController::class, 'submitRegister'])->name('register.submit');