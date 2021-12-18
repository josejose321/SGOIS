<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function index()
    {
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
