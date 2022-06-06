<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminVerifyRequest;
use App\Http\Requests\AvatarRequest;
use App\Http\Requests\ChangePassRequest;
use App\Http\Requests\EmployeeRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Mail\DeclineApplicationMail;
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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    //
    private $data;
    private $announcement;
    private $scholarship;
    public function __construct()
    {
        $this->announcement = new Announcement();
        $this->scholarship = new Scholarship();
    }

    public function index()
    {
        return view("Employee.index")
        ->with('announcements', $this->announcement->getLatest());
    }
    public function show()
    {
        return view('Employee.profile'); //auth()->employee
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


    public function updateAvatar(AvatarRequest $request, User $user)
    {
        //save upload path

        // dd($user);
        $user->update([
            'avatar' => $this->storeAvatar($request->file('avatar'))
        ]);
        return back()->withSuccess("Update avatar");

    }


    public function showScholarships()
    {
        // dd($this->scholarship->endorser_getPending('Scholarship')->count());

        $this->data = [
            'scholarships' => $this->scholarship->endorser_getPending('Scholarship')->simplePaginate(10)
        ];
        // dd($this->scholarship->endorser_getPending('Scholarship')->count());
        return view('Employee.scholarship')
        ->with($this->data);
    }
    public function showDiscounts()
    {

        $this->data = [
            'scholarships' => $this->scholarship->endorser_getPending('Discount')->simplePaginate(10)
        ];
        return view('Employee.discount')
        ->with($this->data);
    }
    public function showLoans()
    {
        $this->data = [
            'scholarships' => $this->scholarship->endorser_getPending('Loan')->simplePaginate(10)
        ];
        return view('Employee.loan')
        ->with($this->data);
    }

    private function storeAvatar($file)
    {
        $path = $file->hashName();
        $file->storeAs('public/avatar/',$path);
        return $path;
    }
    public function updateProfile(EmployeeUpdateRequest $request,User $user)
    {
        $user->update($request->validated());
        return back()->withSuccess( 'Your Profile Succefully Updated!');
    }

    public function showCategories()
    {
        $this->data =[
            'office'=> auth()->user()->employee->office,
            'offices'=> Office::all()
        ];

        return view('Employee.categories')
        ->with($this->data);
    }
    public function viewApplication(Scholarship $scholarship)
    {
        if($scholarship->adminVerification === "Approved")
            return back()->with('error', 'Cannot open this application. \n Application Already Approved!');
        $this->data = [

            'scholarship'=>$scholarship
        ];
        return view('Employee.application-view')
        ->with($this->data);
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
    public function changePassword(ChangePassRequest $request)
    {
        User::find(auth()->user()->userNo)->update(['password' => Hash::make($request->new_password)]);

        return redirect()->route('employee.index')->withSuccess('Password change Successfully');
    }
    public function showChangePassword()
    {
        return view('Employee.change_pass')
        ->with($this->data);
    }
    public function declineApplication(Scholarship $scholarship)
    {
        $scholarship->update([
            'officeVerification'=>"Declined"
        ]);
        Mail::to($scholarship->student->user->email)->send(new DeclineApplicationMail($scholarship));

        return redirect()->route('employee.scholarhips')->withSuccess('Application Declined!');
    }
}
