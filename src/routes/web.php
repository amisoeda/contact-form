<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

Route::get('/', [Route::class, 'index']);

Route::get('/', [ContactControlle::class, 'index']);

Route::get('/', [TestController::class, 'index']);

Route::get('/', [AuthController::class, 'index']);