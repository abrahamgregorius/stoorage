<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'login_get']);
Route::post('/login', [AuthController::class, 'login_post']);

Route::get('/dashboard', [DashboardController::class, 'index']);
