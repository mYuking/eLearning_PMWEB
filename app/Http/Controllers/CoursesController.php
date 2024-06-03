<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    // mendapat data dari base
    public function index(){
        $courses = Courses::all();
        return view("admin.contents.courses.index",[
            "courses"=> $courses
        ]);
    }
     // method untuk menampilkan data student
     public function create(){
        return view('admin.contents.courses.create');
    }
    // method mengirim data
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'desc'=>'required',
        ]);

        Courses::create([
            'name'=> $request->name,
            'category'=> $request->category,
            'desc'=> $request->desc,

        ]);

        return redirect('/admin/courses')->with('pesan','Berhasil menambahkan data');
    }
    // method edit
    public function edit($id){
        // cari berdasarkan id
        $courses = Courses::find($id);

        return view('admin.contents.courses.edit',[
            'courses'=> $courses
    ]);
    }

    // menyimpan hasil update
    public function update(Request $request, $id){
        $courses = Courses::find($id);
        
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'desc' => 'required',
        ]);
        // simpan perubahan
        $courses->update([
            'name'=> $request->name,
            'category'=> $request->category,
            'desc'=> $request->desc,
        ]);

        return redirect('/admin/courses')->with('pesan','Berhasil mengedit student');
    }  
    public function destroy($id){
        $courses = Courses::find($id);
        $courses->delete();
        return redirect('/admin/courses')->with('pesan','Berhasil DELETE courses');
    }

}