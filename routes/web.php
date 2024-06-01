<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentCotroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

// Route untuk menampilkan student 
Route::get('admin/student', [StudentCotroller::class, 'index']);

// Route untuk menampilkan form tambah student
Route::get('admin/student/create', [StudentCotroller::class, 'create']);

// Route untuk mengirim data form tambah student 
Route::post('admin/student/create', [StudentCotroller::class, 'store']);

// Route untuk menampilkan Courses 
Route::get('admin/courses',[CoursesController::class,'index']);

// Route untuk menampilkan halaman edit student 
Route::get('admin/student/edit/{id}', [StudentCotroller::class, 'edit'])->name('student.edit');


// update data student
Route::put('admin/student/update/{id}',[StudentCotroller::class,'update']);

// Route untuk menghapus student 
Route::delete('admin/student/delete/{id}' , [StudentCotroller::class, 'destroy']);

// Route untuk menghapus student 
Route::delete('admin/student/delete/{id}', [StudentCotroller::class, 'destroy']);