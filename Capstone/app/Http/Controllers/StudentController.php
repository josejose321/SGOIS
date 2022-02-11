<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use StudentTable;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Student;
use Exception;
use GrahamCampbell\ResultType\Success;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    
    function index()
    {
        $student = Student::all();
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
    function store(Request $request)
    {
        // dd($request->post());


        try{
            $student = new Student();
            $student->student_no = $request->student_no;
            $student->firstname = $request->firstname;
            $student->middlename = $request->middlename;
            $student->lastname = $request->lastname;
            $student->email = $request->email;
            $student->department = $request->department;
            $student->phone =$request->phone;
            $student->course = $request->course;
            $student->year = $request->year;
            $student->avatar ='defaultAvatar.jpg';
            $student->password = Hash::make("12345");
            $student->created_at = time();
            $student->updated_at = time();
            $student->save();
            return back()->with('success',"student added to the database");
        }catch(QueryException $e)
        {
            return back()->with('error', 'Failed to Add Record\n Server message:'. $e->getMessage());
        }

    }
    function update(Request $request,$student_no)
    {
        dd($request);
        try
        {
            $student = Student::findOrFail($student_no);
            $student->fullname = $request->firstname;
            $student->middlename = $request->middlename;
            $student->lastname = $request->lastname;
            $student->email = $request->email;
            $student->department = $request->department;
            $student->phone = $request->phone;
            $student->course = $request->course;
            $student->year = $request->year;
            //$student->avatar = $this->storeAvatar($request->file('avatar'));
            $student->updated_at = time();
            $student->save();
            return back()->with('successUpdate','successfully updated');

        }catch(ModelNotFoundException $e)
        {
            return back()->with('errorUpdate', 'Something Went Wrong/n'. $e->getMessage());
        }
        catch(Exception $e)
        {
            return back()->with('errorUpdate','Something Went Wrong/n'. $e->getMessage());
        }
    }

    
    function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return back()->with('delete',' successfully Deleted!');
    }
    public function updateAvatar(Request $request, $student_no)
    {
        try
        {
            //save upload path
            $student = Student::findOrFail($student_no);
            $student->avatar = $this->storeAvatar($request->file('avatar'));
            $student->save();


            return back()->with('avatarSuccess',"Succes!");

        }catch(ModelNotFoundException $e)
        {
            return back()->with('avatarError','Uploading Error!\n'. $e->getMessage());
        }

        
    }
    private function storeAvatar($file)//get avatarname and upload to storage
    {
        //dd($request->file('avatar')->getClientOriginalName());
        $path = $file->hashName();
        $file->storeAs('public/avatar/',$path);
        return $path;
    }
}
