<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function index()
    {
        return view("employee.index");
    }
    public function show($employee_no)
    {

    }
    public function create()
    {

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
            $employee->department = $request->department;
            $employee->email = $request->emaiil;
            $employee->postition = $request->position;
            $employee->image = $request->image;
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
            $employee->department = $request->department;
            $employee->email = $request->emaiil;
            $employee->postition = $request->position;
            $employee->avatar = $this->storeAvatar($request);
            $employee->password = $request->password;
            $employee->updated_at = time();
            return back()->with('message', 'Update Successfully!');
        }catch(QueryException $e)
        {
            return back()->with('error','failed to add!\n'. $e->getMessage());
        }catch(ModelNotFoundException $e)
        {
            return 'not found!';
        }
    }
    public function destroy()
    {
        
    }
    public function updateAvatar(Request $request, $employee_no)
    {
        try
        {
            //save upload path
            $employee = Employee::findOrFail($employee_no);
            $employee->image = $this->storeAvatar($request);
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
    private function storeAvatar(Request $request)//get avatarname and upload to storage
    {
        dd($request->avatar->getClientOriginalName());
        $name = $request->avatar->getClientOriginalName();
        $request->avatar->storeAs('public/avatar/',$name);
        return $name;
    }
}
