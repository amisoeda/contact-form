<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

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