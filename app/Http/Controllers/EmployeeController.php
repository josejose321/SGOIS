<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminVerifyRequest;
use App\Http\Requests\AvatarRequest;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Models\Admin;
use App\Models\Announcement;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Office;
use App\Models\Scholarship;
use App\Models\Student;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    private $data;
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
        ->with('employee',Employee::latest()->first()); //auth()->employee
    }

    //Verify Pending request
    public function verifyScholarship(Request $request, Scholarship $scholarship)
    {
        $scholarship->update([
            'officeVerification'=>'Approved',
            'discount' =>$request->discount,
        ]);
        return redirect('/employee/scholarships')->withSuccess('Scholarship Application Approved!');
    }


    public function updateAvatar(AvatarRequest $request, Employee $employee)
    {
        //save upload path

        // dd($user);
        $employee->user->update([
            'avatar' => $this->storeAvatar($request->file('avatar'))
        ]);
        return back()->withSuccess("Update avatar");

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
    public function updateProfile(EmployeeUpdateRequest $request,Employee $employee)
    {
        $employee->user->update($request->validated());
        return back()->withSuccess( 'Your Profile Succefully Updated!');
    }

    public function showCategories()
    {
        $this->data =[
            'employee'=>Employee::latest()->first(),
            'categories'=> Category::simplePaginate(15),
            'offices'=> Office::all()
        ];

        return view('Employee.categories')
        ->with($this->data);
    }
    public function viewApplication(Scholarship $scholarship)
    {
        $this->data = [
            'employee'=>Employee::latest()->first(),
            'scholarship'=>$scholarship
        ];
        return view('Employee.application-view')
        ->with($this->data);
    }
}
