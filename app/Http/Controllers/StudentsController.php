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
        // dd($students);
        return view('students.index',[
            'students' => $students
        ]);
    }
}
