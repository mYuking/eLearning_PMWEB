<?php
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCotroller;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
// // routing baru
// Route::get('/salam',function(){
//     return "Selamat pagi ges";
// });
// // routing profil
// Route::get('/profil',function(){
//     return view('profil');
// });
// // routing about
// Route::get('/about',function(){
//     return view('about');
// });
// // routing about
// Route::get('/dashboard',[DashboardController::class,'show']);

// dashboar route
route::get('admin/dashboard',[DashboardController::class,'index']);
// Route::get('pasien/show',[PasienController::class,'show']);
Route::get('admin/student',[StudentCotroller::class,'index']);


// ------ index course --------\\
Route::get('admin/courses',[CoursesController::class,'index']);
// menampilkan data 
Route::get('admin/courses/create',[CoursesController::class,'create']);
Route::post('admin/courses/create',[CoursesController::class,'store']);
// edit data
Route::get('admin/courses/edit/{id}',[CoursesController::class,'edit'])->name('courses.edit');
// update data
Route::put('admin/courses/update/{id}',[CoursesController::class,'update']);
// menghapus data
Route::delete('admin/courses/delete/{id}',[CoursesController::class,'destroy']);


// ------ index student -------- \\
Route::get('admin/student',[StudentCotroller::class,'index']);
// menampilkan data 
Route::get('admin/student/create',[StudentCotroller::class,'create']);
Route::post('admin/student/create',[StudentCotroller::class,'store']);

// edit data
Route::get('admin/student/edit/{id}',[StudentCotroller::class,'edit'])->name('student.edit');

// update data student
// update data
Route::put('admin/student/update/{id}',[StudentCotroller::class,'update']);

// menghapus data
Route::delete('admin/student/delete/{id}',[StudentCotroller::class,'destroy']);