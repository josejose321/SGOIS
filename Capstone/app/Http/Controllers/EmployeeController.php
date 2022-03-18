<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        try{
            $employee = new Employee();
            $employee->employee_no = $request->employee;
            $employee->firstname = $request->firstname;
            $employee->middlename= $request->middlename;
            $employee->lastname = $request->lastname;
            $employee->email = $request->emaiil;
            $employee->departmentCode = $request->department;
            $employee->email = $request->emaiil;
            $employee->postition = $request->position;
            $employee->avatar = "dafaultAvatar.jpg";
            $employee->password = $request->password;
            $employee->created_at = time();
            $employee->updated_at = time();
            return back()->with('message', 'successfully added!');
        }catch(QueryException $e)
        {
            return back()->with('error','failed to add!\n'. $e->getMessage());
        }
    }
    public function update(Request $request, $employee_no)
    {
        
        try{
            $employee = Employee::findOrFail($employee_no);
            $employee->firstname = $request->firstname;
            $employee->middlename= $request->middlename;
            $employee->lastname = $request->lastname;
            $employee->email = $request->emaiil;
            $employee->departmentCode = $request->department;
            $employee->email = $request->emaiil;
            $employee->password = $request->password;
            return back()->with('message', 'Update Successfully!');
        }catch(QueryException $e)
        {
            return back()->with('error','failed to add!\n'. $e->getMessage());
        }catch(ModelNotFoundException $e)
        {
            return 'not found!';
        }
    }
    public function approve(Request $request, Scholarship $scholarhip)
    {
        $scholarhip->officeVerification = 'approved';
        $scholarhip->discount = $request->discount;
        
        return back('approved','Approved');
    }
    public function decline(Scholarship $scholarhip)
    {
        $scholarhip->officeVerification ='declined';


        return back('decline','Decline Application');
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
    private function storeAvatar($file)
    {
        $path = $file->hashName();
        $file->storeAs('public/avatar/',$path);
        return $path;
    }
}
