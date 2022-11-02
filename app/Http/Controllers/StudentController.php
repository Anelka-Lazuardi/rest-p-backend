<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index()
    {
        $students = Student::all();
        $data = [
            "message" => 'Get all students',
            "data" => $students
        ];
        return response()->json($data, 200);
    }

    public function detail(Student $id)
    {
        $students = Student::find($id);
        $data = [
            "message" => 'Get  students',
            "data" => $students
        ];
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {

        $student = Student::create($request->all());
        $data = [
            "message" => 'Success create student',
            "data" => $student
        ];
        return response()->json($data, 201);
    }

    public function update(Request $request, Student $id)
    {

        $student = Student::find($id);
        $student->update($request->all());
        $data = [
            "message" => 'Success update student',
            "data" => $student
        ];
        return response()->json($data, 201);
    }

    public function delete(Request $request, Student $id)
    {
        $student = Student::find($id);
        $student->delete();
        $data = [
            "message" => 'Success deleted student',
        ];
        return response()->json($data, 200);
    }
}
