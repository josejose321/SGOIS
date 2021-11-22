<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use StudentTable;
use App\Models\Student;

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
        $request->validate([
            'student_no'=> 'required',
            'firstname'=> 'required',
            'middlename'=> 'required',
            'lastname'=> 'required',
            'suffix',
            'department'=> 'required',
            'phoneNumber'=> 'required',
            'course'=> 'required',
            'year'=> 'required'
        ]);
        $data = $request->post();
        Student::saved($data);
        dd($data);
        return response()->json($data);
    }
    function update($id)
    {

    }
    function destroy($id)
    {
        Student::destroy($id);
        return redirect('Student.create');
    }
}
