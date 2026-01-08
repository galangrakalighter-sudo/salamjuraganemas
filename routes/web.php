<?php

use App\Http\Controllers\EmasController;
use App\Http\Controllers\LogamMuliaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);

Route::middleware('guest')->group(function() {
    Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
    Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('post-login');
});


Route::middleware('auth')->group(function() {
    Route::get('/cms', [App\Http\Controllers\CMSController::class, 'index'])->name('cms');
    Route::resource('emas', EmasController::class);
    Route::resource('logam_mulia', LogamMuliaController::class);
    Route::post("/logout", [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
});