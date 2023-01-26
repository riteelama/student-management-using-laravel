<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::orderBy('id','DESC')->get();
       
        return view('students.index',[
            'students' => $students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        
        
        Student::create([
            'name' => $request-> name,
            'gender' => $request-> gender,
            'phone' => $request-> phone,
            // 'profile_image'=>$request->profile_image,
            'email' => $request-> email,
            'nationality' => $request-> nationality,
            'date_of_birth' => $request-> date_of_birth,
            'grade_ten' => $request-> grade_ten,
            'grade_twelve' => $request-> grade_twelve,
            'grade_bachelor' => $request-> grade_bachelor,
            'grade_master' => $request-> grade_master,
            'contact_mode' => $request-> contact_mode,
        ]);
        dd($request->all());
        // return redirect()->route('students.index')->with('status', "Student details added successfully!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show',[
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
