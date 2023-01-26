<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    //
    public function index()
    {
        $students = Student::orderBy('id','DESC')->get();
       
        return view('students.index',[
            'students' => $students
        ]);
    }

    public function show(Student $student) {
        return view('students.show',[
            'student' => $student
        ]);
    }
}
