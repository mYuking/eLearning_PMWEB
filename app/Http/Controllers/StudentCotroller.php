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

    // method untuk menampilkan form tambah student
    public function create (){
        return view('admin.contents.student.create');
    }

    // method untuk menyimpan data student 
    public function store(Request $request){
        // validasi data yang diterima 
        $request->validate([
            'name'=> 'required', 
            'nim'=> 'required|numeric',
            'major'=> 'required',
            'class'=> 'required'
        ]);

        //simpan ke database
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
        ]);

        // arahkan ke halaman student index
        return redirect('/admin/student')->with('pesan', 'Berhasil menambahkan data.');
    }

    // method untuk menampilkan halaman edit
    public function edit($id){
        // cari student berdasarkan id
        $student = Student::find($id); // SELECT * FROM students WHERE id = $id;
        // kirim student ke view edit
        return view('admin.contents.student.edit', [
            'student'=>$student
        ]);
    }

    // menyimpan hasil update
    public function update(Request $request, $id){
        $student = Student::find($id); 
        $request->validate([
            'name'=>'required',
            'nim'=>'required|numeric',
            'major'=>'required',
            'class'=>'required',
        ]);

        // simpan perubahan
        $student->update([
            'name'=> $request->name,
            'nim'=> $request->nim,
            'major'=> $request->major,
            'class'=> $request->class,
        ]);
        return redirect('/admin/student')->with('pesan','Berhasil menambahkan student');
    }  

       // menghapus
    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/admin/student')->with('pesan','Berhasil DELETE student');
    }

       
    }

