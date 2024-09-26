<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home route
Route::get('/', [AuthController::class, 'index'])->name('home');

Route::get("/package", [AuthController::class, 'package'])->name('package');
Route::get("/about", [AuthController::class, 'about'])->name('about');
Route::get("/booking", [AuthController::class, 'booking'])->name('booking');
Route::get("/contact", [AuthController::class, 'contact'])->name('contact');