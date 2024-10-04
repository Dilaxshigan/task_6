<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\packageController;

// Home route
Route::get('/', [AuthController::class, 'index'])->name('home');

Route::get("/package", [AuthController::class, 'package'])->name('package');
Route::get("/about", [AuthController::class, 'about'])->name('about');
Route::get("/booking", [AuthController::class, 'booking'])->name('booking');
Route::get("/contact", [AuthController::class, 'contact'])->name('contact');

Route::get("/add_package", [packageController::class, 'add_package'])->name('add_package');
Route::post("/upload_package", [packageController::class, 'upload_package'])->name('upload_package');
Route::get("/delete_package/{id}", [packageController::class, 'delete_package'])->name('delete_package');
Route::get("/edit_package/{id}", [packageController::class, 'edit_package'])->name('edit_package');
Route::post("/update_package/{id}", [packageController::class, 'update_package'])->name('update_package');