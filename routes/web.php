<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
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
Route::get('/user', function () {
    return view('user');
});
Route::get('/product', function () {
    return view('product');
});
