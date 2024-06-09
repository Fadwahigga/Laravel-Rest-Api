<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAllStudent()
    {
        $student = Student::all();
        $data = [
            'status' => 200,
            'student' => $student
        ];
        return response()->json($data, 200);
    }
    public function addStudent(Request $request){

    }
}
