<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarRequest;
use App\Http\Requests\ScholarshipRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\Course;
use App\Models\Department;
use App\Models\Loan;
use App\Models\Office;
use App\Models\Scholarship;
use App\Models\Semester;
use App\Models\Student;


class StudentController extends Controller
{
    private $announcement;
    private $semester;
    private $data;
    public function __construct()
    {
        $this->announcement = new Announcement();
        $this->semester = new Semester();
    }
    function index()
    {
        $this->data = [
            'student'=>Student::find('18-08925'),
            'offices' => Office::all(),
            'categories'=> Category::all(),
            'sem'=> $this->semester->getLatest(),
            'announcements' => $this->announcement->getLatest()
        ];
        return view('Student.index')
        ->with($this->data);

    }
    function show(Student $student)
    {
        $this->data = [
            'student'=>$student, //auth()->student()
            'offices' => Office::all(),
            'categories'=> Category::all(),
            'sem'=> $this->semester->getLatest(),
        ];
        return view("Student.profile")
        ->with($this->data);
    }
    function showScholarships()
    {
        return view("Student.scholarships")
        ->with('scholarships',Scholarship::all())
        ->with('loans',Loan::all());
    }

    function edit(Student $student)
    {
        return view("Student.edit")
        ->with(compact('student')) //auth()->student()
        ->with('courses',Course::all())
        ->with('departments',Department::all());
    }

    public function updateProfile(StudentUpdateRequest $request, Student $student)
    {
        // dd($request->input());
        $student->update($request->validated());
        return back()->with('successUpdate','successfully updated');
 
    }
    public function applyScholarship(ScholarshipRequest $request, Student $student)
    {
        $scholarship = Scholarship::create([
            'student_no'=> $request->student_no,
            "officeCode"=>$request->officeCode,
            "semesterCode"=>$request->semesterCode,
            "categoryNo"=>$request->categoryNo,
            "discount"=> $request->discount,
            "requirement"=> $this->storeFiles($request->file('requirement'),'requirements/'),
            "photo"=>$this->storeFiles($request->file('photo'),'photos/'),
        ]);
        return back()->with('success','Your Application is submitted');
    }

    public function updateAvatar(AvatarRequest $request, Student $student)
    { 

        $student->update(['avatar'=> $this->storeAvatar($request->file('avatar'))]);
        return back()->with('success',"You update your profile!");
    }

    
    private function storeAvatar($file)//get avatarname and upload to storage
    {
        $path = $file->hashName();
        $file->storeAs('public/avatar/',$path);
        return $path;
    }
    private function storeFiles($file ,$directory)//also store the requiments to storage path: requirements/
    {
        $path = $file->hashName();
        $file->storeAs('public/'.$directory,$path);
        return $directory . $path;
    }
    public function showSportsDev()
    {
        return view('Student.sportsdev');
    }
}
