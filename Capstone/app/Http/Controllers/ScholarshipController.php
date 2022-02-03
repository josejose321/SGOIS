<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

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
        $scholarhip->semesterCode = $request->semesterCode;
        $scholarhip->type = $request->type;
        $scholarhip->field = $request->field;
        $scholarhip->discount = $request->discount;
        $scholarhip->requirement = $this->storeFiles($request,'public/requirements/');
        $scholarhip->photo = $this->storeFiles($request,'public/photoRequirements/');
        $scholarhip->officeVerification = $request->officeVerification;
        $scholarhip->adminVerification = $request->adminVerification;
        $scholarhip->created_at = time();
        $scholarhip->updated_at = time();
        
    }
    public function approveByOffice(Request $request, $student_no)
    {
        $scholarhip = Scholarship::find($student_no);
        $scholarhip->status = $request->get('status');
    }
    public function verifyByAdmin(Request $request, $student_no)
    {
        
    }
    public function verifyByOffice(Request $request, $student_no)
    {
        
    }
    private function storeFiles(Request $request,$path)//also store the requiments to storage path: requirements/
    {
        dd($request->requirement->getClientOriginalName());
        $name = $request->requirement->getClientOriginalName();
        $request->file('requirement')->storeAs($path,$name);
        return $name;
    }

}
