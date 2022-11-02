<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'jurusan',
        'nim',
    ];
    // static function getAllStudent()
    // {
    //     $students = DB::select('select * from students');
    //     return $students;
    // }

    // static function getStudent($id)
    // {
    //     $student = DB::select('select * from students where id = ' . $id);
    //     return $student;
    // }
}
