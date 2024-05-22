<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentCotroller extends Controller
{
    // method untuk menampilkan halaman student
    public function index(){
        // mendapatkan data student dari database
        $students = Student::all();

        // panggil view dan kirim data je view
        return view('admin.contents.student.index', [
            'students' => $students
        ]);
    }
}
