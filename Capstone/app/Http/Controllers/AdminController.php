<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $scholarships = (object)array(
            "id"=> "18-08925",
            "fullname"=> "Evasco,Jose II V",
            "department"=> "College of Computer Studies",
            "course"=> "BSIT",
            "year"=> "4TH YEAR",
            "requirements"> "object" 

        );
        $loans = (object)array(
            "id"=> "18-08925",
            "fullname"=> "Evasco,Jose II V",
            "department"=> "College of Computer Studies",
            "course"=> "BSIT",
            "year"=> "4TH YEAR",
            "requirements"> "object" 

        );
        $discounts = (object)array(
            "id"=> "18-08925",
            "fullname"=> "Evasco,Jose II V",
            "department"=> "College of Computer Studies",
            "course"=> "BSIT",
            "year"=> "4TH YEAR",
            "requirements"> "object" 

        );
        $grants = (object)array(
            "id"=> "18-08925",
            "fullname"=> "Evasco,Jose II V",
            "department"=> "College of Computer Studies",
            "course"=> "BSIT",
            "year"=> "4TH YEAR",
            "requirements"> "object" 

        );
        $students = Student::all();
        return view('Admin.index')
        ->with(compact('scholarships'))
        ->with(compact('loans'))
        ->with(compact('discounts'))
        ->with(compact('grants'))
        ->with(compact('students'));
    }
    public function show($admin_no)
    {
        $admin = Admin::findOrFail($admin_no);

        return $admin;
    }
    public function store(Request $request)
    {
        try{
            $admin = new Admin();
            $admin->admin_no = $request->admin_no;
            $admin->firstname = $request->firstname;
            $admin->middlename= $request->middlename;
            $admin->lastname = $request->lastname;
            $admin->email = $request->emaiil;
            $admin->department = $request->department;
            $admin->email = $request->emaiil;
            $admin->postition = $request->position;
            $admin->image = $request->image;
            $admin->password = $request->password;
            $admin->created_at = time();
            $admin->updated_at = time();
            return back()->with('message', 'successfully added!');
        }catch(QueryException $e)
        {
            return back()->with('error','failed to add!\n'. $e->getMessage());
        }
        
    }
    public function create()
    {

    }
    public function update(Request $request,$admin_no)
    {
        try{
            $admin = Admin::findOrFail($admin_no);
            $admin->admin_no = $request->admin_no;
            $admin->firstname = $request->firstname;
            $admin->middlename= $request->middlename;
            $admin->lastname = $request->lastname;
            $admin->email = $request->emaiil;
            $admin->department = $request->department;
            $admin->email = $request->emaiil;
            $admin->postition = $request->position;
            $admin->updated_at = time();
            return back()->with('message', 'successfully update!');
        }catch(QueryException $e)
        {
            return back()->with('error','failed to update!\n'. $e->getMessage());
        }
    }
    public function destroy($admin_no)
    {
        $admin = Admin::findOrFail($admin_no);
        $admin->delete();

        return back()->with('deletesuccess','delete successfully!');
    }
}
