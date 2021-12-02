<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use StudentTable;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    //
    function index()
    {
        return view('Student.index');
    }
    function profile()
    {
        return view("Student.profile");
    }
    function create(Request $request)
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
        dd($data);
        return redirect()->back()->withErrors($validator)->withInput();
    }
    function update(Request $request,$id)
    {
        $student = Student::find($id);
        $student->fullname = $request->get('fullname');
        $student->department = $request->get('department');
        $student->phoneNumber = $request->get('phoneNumber');
        $student->course = $request->get('course');
        $student->year = $request->get('year');
        $student->save();
        return redirect()->back();
    }
    function destroy($id)
    {
        Student::destroy($id);
        return redirect()->back();
    }
}
