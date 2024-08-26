<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/confirm', function () {
    return view('index');
});
Route::get('/thanks', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('index');
});