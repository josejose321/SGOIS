<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Imports\StudentsImport;
use App\Mail\WelcomMail;
use App\Models\Admin;
use App\Models\Student;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Exceptions\LaravelExcelException;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    //
    public function index()
    {
        
        
        //Mail::to('jose.evascoii1150@gmail.com')->send( new WelcomMail());
        // return new WelcomMail();
        $students = Student::all();
        return view('Admin.index')
        ->with(compact('students'))
        ->with('admin', Admin::find('18-08925'));
    }
    public function show($admin_no)
    {
        $admin = Admin::findOrFail($admin_no);

        return view('Admin.index')
        ->with('admin', Admin::findOrFail($admin_no))
        ->with('students',Student::all());
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
            $admin->departmentCode = $request->department;
            $admin->email = $request->emaiil;
            $admin->postition = $request->position;
            $admin->avatar = 'defaultAvatar.jpg';
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
            // $admin->avatar = 'test';//$this->getAvatarname($request);
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
    public function import(Request $request)
    {
        //dd($request);
        try{
            Excel::import(new StudentsImport, $request->file('file')->store('temp'));
            return back()->with('successImport','Import Successfully!');
        }catch(LaravelExcelException $e){
            return back()->with('errorImport','Import Error!');
        }
        return 'success!';
    }

    public function updateAvatar(Request $request, $admin_no)
    {
        try
        {
            //save upload path
            $admin = Admin::findOrFail($admin_no);
            $admin->avatar = $this->storeAvatar($request->file('avatar'));
            $admin->save();


            return back()->with('avatarSuccess',"Succes!");

        }catch(Exception $e)
        {
            return back()->with('avatarError','Uploading Error!\n'. $e->getMessage());
        }

        
    }

    private function storeAvatar($file)//get avatarname and upload to storage
    {
        //dd($request->file('avatar')->getClientOriginalName());
        $path = $file->hashName();
        $file->storeAs('public/avatar/',$path);
        return $path;
    }
    
}
