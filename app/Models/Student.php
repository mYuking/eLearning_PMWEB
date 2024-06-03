<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    // mendefinisikan field yang boleh di isi
    protected $fillable = ['name', 'nim', 'major', 'class', 'course_id'];

    /**
     * 1to 1;
     * - hasOne(NamaModelnya): table saat ini meinjamkan key
     * - belongsToMany(NamaModelnya): table saat ini meminjam key dari table lain
     * 
     * 1 to M
     * - hasMany(NamaModelnya): table saat meminjam id 
     * belongsToMany(NamaModelnya): table saat ini meminjam id dari table lain
     */
    

    // mendefinisikan relasi ke model Course
    public function course(){
        return $this->belongsTo(Courses::class);
    }
}
