<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentCotroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

// Route untuk menampilkan student 
Route::get('admin/student', [StudentCotroller::class, 'index']);

