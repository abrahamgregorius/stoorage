<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'login_get']);
Route::post('/login', [AuthController::class, 'login_post']);

Route::middleware(UserMiddleware::class)->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dash.home');
    Route::get('/logout', [AuthController::class, 'logout_post']);

    Route::get('/dashboard/items', [ItemController::class, 'index'])->name('dash.items');
    Route::get('/dashboard/categories', [CategoryController::class, 'index'])->name('dash.categories');

});
