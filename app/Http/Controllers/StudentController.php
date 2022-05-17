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
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    private $announcement;
    private $semester;
    private $data;
    public function __construct()
    {
        $this->announcement = new Announcement();
        $this->semester = new Semester();
        $this->category = new Category();
    }
    function index()
    {
        $this->data = [
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
        $this->data = [
            'offices' => Office::all(),
            'categories'=> Category::all(),
            'sem'=> $this->semester->getLatest(),
            'announcements' => $this->announcement->getLatest()
        ];
        return view("Student.scholarships")
        ->with($this->data);
    }

    function edit(Student $student)
    {
        // dd($student->user);
        return view("Student.edit")
        ->with(compact('student')) //auth()->student()
        ->with('courses',Course::all())
        ->with('departments',Department::all());
    }

    public function updateProfile(StudentUpdateRequest $request, Student $student)
    {
        // dd($request->input());
        $student->user()->update([
            'firstname'=> $request->firstname,
            'middlename'=> $request->middlename,
            'lastname'=> $request->lastname,
            'email'=> $request->email,
            'phone'=> $request->phone,
        ]);
        $student->update([
            'courseNo'=> $request->courseNo,
            'year'=> $request->year,
        ]);
        return back()->withSuccess('successfully updated');

    }
    public function applyScholarship(ScholarshipRequest $request, Student $student)
    {
        // dd($request->validated());
        $student->scholarships()->create([
            "type" => $request->type,
            "officeCode"=>$request->officeCode,
            "semesterCode"=>$request->semesterCode,
            "categoryNo"=>$request->categoryNo,
            "discount"=> $request->discount,
            "requirement"=> $this->storeFiles($request->file('requirement'),'requirements/'),
            "photo"=>$this->storeFiles($request->file('photo'),'photos/'),
        ]);
        return back()->withSuccess('Your Application is submitted');
    }

    public function updateAvatar(AvatarRequest $request, Student $student)
    {

        // dd($request->validated());
        $student->user()->update(['avatar'=> $this->storeAvatar($request->file('avatar'))]);
        return back()->withSuccess("You update your profile!");
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
        $this->data = [
            'sem'=> $this->semester->getLatest(),
            'office' => Office::find('UNC-SDO'),
            'categories'=> Category::where('field_team','Varsity')->get(),
        ];
        // dd(Student::find(35));
        return view('Student.sportsdev')
        ->with($this->data);
    }
    public function showCultureAndArts()
    {
        $this->data = [
            'sem'=> $this->semester->getLatest(),
            'office' => Office::find('UNC-CULTURE&ARTS'),
        ];
        // dd(Student::find(35));
        return view('Student.culture')
        ->with($this->data);
    }
    public function showLoans()
    {
        $this->data = [
            'sem'=> $this->semester->getLatest(),
            'office' => Office::find('UNC-CULTURE&ARTS'),
        ];
        // dd(Student::find(35));
        return view('Student.loans')
        ->with($this->data);
    }
    public function showDiscounts()
    {
        $this->data = [
            'sem'=> $this->semester->getLatest(),
            'office' => Office::find('UNC-CULTURE&ARTS'),
        ];
        // dd(Student::find(35));
        return view('Student.discounts')
        ->with($this->data);
    }
    public function showApplication()
    {
        $this->data = [
            'scholarships'=>
            Scholarship::where('student_no',
            Auth::user()->student->student_no)
            ->latest()->simplePaginate(10)
        ];

        return view('Student.applications')
        ->with($this->data);
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }


}
