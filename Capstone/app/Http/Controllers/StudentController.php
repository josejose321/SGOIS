<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use StudentTable;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    
    function index()
    {
        $student = (object)array(
            'name'=>"Evasco,Jose II V",
            'year'=>'4th Year',
            'course'=>'BSIT',
            'scholarhip'=> 0,
            'loan' => 0,
            'discount' => 1,
            'student_no' => '18-08925'
            
        );
        //dd($student);
        return view('Student.index')->with(compact('student'));
    }
    function show($student_no)
    {
        return view("Student.profile");
    }
    function create(Request $request)
    {
         
    }
    function edit()
    {
        return view("Student.edit");
    }
    function store(Request $request)
    {
        // $validator =$request->validate([
        //     'student_no'=> 'required',
        //     'fullname'=> 'required',
        //     'department'=> 'required',
        //     'phoneNumber'=> 'required',
        //     'course'=> 'required',
        //     'year'=> 'required'
        // ]);
        // $student = new Student;
        // $student->create($data = $request->post());
        //dd($data);
        
        $student = $request->input();
        dd($student);
        return $student;

    }
    function update(Request $request)
    {
        $student = Student::find($request->input('student_no'));
        $student->fullname = $request->input('firstname');
        $student->middlename = $request->input('middlename');
        $student->lastname = $request->input('lastname');
        $student->department = $request->input('department');
        $student->phoneNumber = $request->input('phoneNumber');
        $student->course = $request->input('course');
        $student->year = $request->input('year');
        $student->save();
        return back()->with('update','Updated Successfully!');
    }
    function destroy($id)
    {
        Student::destroy($id);
        return back()->with('delete',' Deleted');
    }
}
