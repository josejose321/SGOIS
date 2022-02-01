<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use StudentTable;
use Symfony\Component\HttpFoundation\Response;
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
        $student = Student::findOrFail($student_no);
        return view("Student.profile")
        ->with(compact('student'));
    }
    function create(Request $request)
    {
         
    }
    function edit($student_no)
    {
        $student = Student::findOrFail($student_no);


        return view("Student.edit")
        ->with(compact('student'));
    }
    function store(StudentRequest $request)
    {
        $student = new Student;
        $student->student_no = $request->student_no;
        $student->firstname = $request->firstname;
        $student->middlename = $request->middlename;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->department = $request->department;
        $student->phone =$request->phone;
        $student->course = $request->course;
        $student->year = $request->year;
        $student->image = $request->image;
        $student->password = "12345";
        $student->save();
        // $student = Student::create($request->post());
        
        // $student = $request->input();
        dd($student);
        return response()->json($student, 200);

    }
    function update(Request $request)
    {
        $student = Student::find($request->student_no);
        $student->fullname = $request->firstname;
        $student->middlename = $request->middlename;
        $student->lastname = $request->lastname;
        $student->department = $request->department;
        $student->phone = $request->phone;
        $student->course = $request->course;
        $student->year = $request->year;
        $student->save();
        return response()->json($student, 200);
    }
    function destroy($id)
    {
        Student::destroy($id);
        return back()->with('delete',' Deleted');
    }
}
