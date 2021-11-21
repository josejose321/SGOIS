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
        return response()->json($request->post());
    }
    function update($id)
    {

    }
    function destroy($id)
    {

    }
}
