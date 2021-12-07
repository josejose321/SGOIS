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
        
        $name = "Evasco,Jose II V";//try
        $student = (object)array(
            'name'=>"Evasco,Jose II V",
            'year'=>'4th Year',
            'course'=>'BSIT',
            'scholarhip'=> 0,
            'loan' => 0,
            'discount' => 1,
            
        );
        // dd($student);
        return view('Student.index')->with(compact('student'));
    }
    function show($student_no)
    {
        return view("Student.profile");
    }
    function showStudents($id)
    {

    }
    function create(Request $request)
    {
         
    }
    function store(Request $request)
    {
        $validator =$request->validate([
            'student_no'=> 'required',
            'fullname'=> 'required',
            'department'=> 'required',
            'phoneNumber'=> 'required',
            'course'=> 'required',
            'year'=> 'required'
        ]);
        $student = new Student;
        $student->create($data = $request->post());
        //dd($data);
        return redirect()->back()->withErrors($validator)->withInput();
    }
    function update(Request $request,$id)
    {
        $student = Student::find($id);
        $student->fullname = $request->input('fullname');
        $student->department = $request->input('department');
        $student->phoneNumber = $request->input('phoneNumber');
        $student->course = $request->input('course');
        $student->year = $request->input('year');
        $student->save();
        return redirect()->back();
    }
    function destroy($id)
    {
        Student::destroy($id);
        return redirect()->back();
    }
}
