<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminVerifyRequest;
use App\Http\Requests\AvatarRequest;
use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Employee;
use App\Models\Scholarship;
use App\Models\Student;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    private $announcement;
    public function __construct()
    {
        $this->announcement = new Announcement();
    }

    public function index()
    {
        return view("Employee.index")
        ->with('announcements', $this->announcement->getLatest());
    }
    public function show()
    {
        return view('Employee.profile')
        ->with('employee',Employee::find('18-08925'));
    }

    //Verify Pending request
    public function verifyScholarship(Request $request, Scholarship $scholarship)
    {
        $scholarship->update([
            'officeVerification'=>'Approved',
            'discount' =>$request->discount,
        ]);
        return back()->with('success','Scholarship Application Approved!');
    }


    public function updateAvatar(AvatarRequest $request, Employee $employee)
    {
        //save upload path
        $employee->update([
            'avatar' => $this->storeAvatar($request->file('avatar'))
        ]);
        return back()->with('success',"Update avatar");

    }


    public function showScholarships()
    {
        return view('Employee.scholarship')
        ->with('scholarships',Scholarship::where('officeVerification','Pending')
        ->latest()
        ->simplePaginate(10));
    }
    public function showDiscounts()
    {
        return view('Employee.scholarship')
        ->with('scholarships',Scholarship::where('adminVerification','Pending')->latest()->simplePaginate(10));
    }
    public function showLoans()
    {
        return view('Employee.scholarship')
        ->with('scholarships',Scholarship::where('adminVerification','Pending')->latest()->simplePaginate(10));
    }
    
    private function storeAvatar($file)
    {
        $path = $file->hashName();
        $file->storeAs('public/avatar/',$path);
        return $path;
    }
}
