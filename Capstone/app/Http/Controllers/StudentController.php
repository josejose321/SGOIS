<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Office;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Student;
use Exception;
use GrahamCampbell\ResultType\Success;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\returnSelf;

class StudentController extends Controller
{
    
    function index()
    {
        //dd($offices);
        return view('Student.index')
        ->with('student',Student::find('18-08925'))
        ->with('offices',Office::all());

    }
    function show(Student $student)
    {
        return view("Student.profile")
        ->with('student',$student)
        ->with('offices',Office::all());
    }

    function edit(Student $student)
    {
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
            $student->departmentCode = $request->department;
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
    // function update(Request $request,$student_no)
    // {
    //     dd($request);
    //     try
    //     {
    //         $student = Student::findOrFail($student_no);
    //         $student->firstname = $request->firstname;
    //         $student->middlename = $request->middlename;
    //         $student->lastname = $request->lastname;
    //         $student->email = $request->email;
    //         $student->department = $request->department;
    //         $student->phone = $request->phone;
    //         $student->course = $request->course;
    //         $student->year = $request->year;
    //         //$student->avatar = $this->storeAvatar($request->file('avatar'));
    //         $student->updated_at = time();
    //         $student->save();
    //         return back()->with('successUpdate','successfully updated');

    //     }catch(ModelNotFoundException $e)
    //     {
    //         return back()->with('errorUpdate', 'Something Went Wrong/n'. $e->getMessage());
    //     }
    //     catch(Exception $e)
    //     {
    //         return back()->with('errorUpdate','Something Went Wrong/n'. $e->getMessage());
    //     }
    // }
    public function updateProfile(Request $request, Student $student)
    {
        //dd($request->input());
        try
        {
            $student->firstname = $request->firstname;
            $student->middlename = $request->middlename;
            $student->lastname = $request->lastname;
            $student->email = $request->email;
            $student->departmentCode = $request->department;
            $student->phone = $request->phone;
            $student->course = $request->course;
            $student->year = $request->year;
            $student->updated_at = time();
            $student->save();
            return back()->with('successUpdate','successfully updated');

        }catch(Exception $e)
        {
            return back()->with('errorUpdate','Something Went Wrong/n'. $e->getMessage());
        }
    }

    public function updateAvatar(Request $request, Student $student)
    {
        if($request->avatar == null)
            return back()->with('avatarError','Import your file First!');
            
             
        //save upload path
        $student->avatar = $this->storeAvatar($request->file('avatar'));
        $student->save();
        return back()->with('avatarSuccess',"Succes!");
        
    }
    private function storeAvatar($file)//get avatarname and upload to storage
    {
        $path = $file->hashName();
        $file->storeAs('public/avatar/',$path);
        return $path;
    }
}
