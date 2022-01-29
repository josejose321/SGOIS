<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function index()
    {
        return view("employee.index");
    }
    public function create(Request $request)
    {
        $employee = new Employee;

        $employee->create($request->post());

    }
    public function update()
    {
        
        
    }
    public function destroy()
    {
        
    }
}
