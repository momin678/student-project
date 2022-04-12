<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->gender = $request->gender;
        $student->class = $request->class;
        $student->education_year = $request->education_year;
        $student->address = $request->address;
        if($request->hasFile('photo')){
            $photo = $request->photo;
            $name = rand(1000, 9999).time().'.'.$photo->extension();
            $request->photo->move(public_path('images/student-photo'), $name);       
            $student->photo = $name;
        }
        $student->save();
        return back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        
        $student_info = Student::find($student->id);
        return view('student.edit', compact('student_info'));
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
        $student = Student::find($student->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->gender = $request->gender;
        $student->class = $request->class;
        $student->education_year = $request->education_year;
        $student->address = $request->address;
        if($request->hasFile('photo')){
            if($student->photo){
                $image = public_path('images/student-photo').'/'.$student->photo;
                if(file_exists($image)){
                unlink($image); 
                }
            }
            $photo = $request->photo;
            $name = rand(1000, 9999).time().'.'.$photo->extension();
            $request->photo->move(public_path('images/student-photo'), $name);       
            $student->photo = $name;

            
        }
        $student->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
    }
    public function delete_student(Request $request, $id){
        $student = Student::find($id);
        if($student->photo){
            $image = public_path('images/student-photo').'/'.$student->photo;
            if(file_exists($image)){
            unlink($image); 
            }
        }
        Student::delete_student($request->id);
        return redirect()->route('student.index');
    }
}
