<?php

namespace App\Http\Controllers;

use App\Mail\WelcomMail;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ScholarshipController extends Controller
{
    //
    public function index()
    {

    }
    public function create(Request $request)
    {

    }
    public function store(Request $request)
    {
        $scholarhip = new Scholarship();
        $scholarhip->student_no = $request->student_no;
        $scholarhip->officeCode = $request->officeCode;
        $scholarhip->semesterCode = $request->semesterCode;
        $scholarhip->categoryNo = $request->categoryNo;;
        $scholarhip->discount = $request->discount;
        $scholarhip->requirement = $this->storeFiles($request->file('requirement'),'public/requirements/');
        $scholarhip->photo = $this->storeFiles($request->file('photo'),'public/photos/');
        
    }
    // public function approveByOffice(Request $request, $student_no)
    // {
    //     $scholarhip = Scholarship::find($student_no);
    //     $scholarhip->officeVerification = $request->officeVerification;
    //     $scholarhip->discount = $request->discount;

    //     return back('verify','Verify');
    // }
    public function verifyByAdmin(Request $request, $student_no)
    {
        
    }
    public function verifyByOffice(Request $request, Scholarship $scholarship)
    {
        $scholarship->officeVerification = $request->officeVerification;
        $scholarship->discount = $request->discount;

        //Mail::send($scholarship->student->email, new WelcomMail($scholarhip));
        return back('verified','approve ka na');
    }
    private function storeFiles($file ,$directory)//also store the requiments to storage path: requirements/
    {
        $path = $file->hashName();
        $file->storeAs($directory,$path);
        return $directory . $path;
    }

}

