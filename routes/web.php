<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/inboxs', function () {
    return view('inboxs');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/products', function () {
    return view('products');
});
