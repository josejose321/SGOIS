<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminVerifyRequest;
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

    public function index()
    {
        return view("Employee.index")
        ->with('announcements',Announcement::all());
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


    public function updateAvatar(Request $request, $employee_no)
    {
        try
        {
            //save upload path
            $employee = Employee::findOrFail($employee_no);
            $employee->image = $this->storeAvatar($request->file('avatar'));
            $employee->save();


            return back()->with('avatarSuccess',"Succes!");

        }catch(ModelNotFoundException $e)
        {
            return back()->with('avatarError','Uploading Error!\n'. $e->getMessage());
        }catch(Exception $e)
        {
            return back()->with('unknownError',"Unknown Error occured!\n Error Message:".$e->getMessage());
        }

        
    }


    public function showScholarships()
    {
        return view('Employee.scholarship')
        ->with('scholarships',Scholarship::where('officeVerification','Pending')->latest()->simplePaginate(10));
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
