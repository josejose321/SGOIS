<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
            $employee->admin_no = $request->admin_no;
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
    public function update()
    {
        
        
    }
    public function destroy()
    {
        
    }
}
