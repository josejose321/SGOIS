<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
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
        $discount = new Discount();
        $discount->student_no = $request->student_no;
        $discount->semesterCode = $request->semesterCode;
        $discount->type = $request->type;
        $discount->field = $request->field;
        $discount->discount = $request->discount;
        $discount->requirement = $this->storeFiles($request->file('requirement'),'public/requirements/');
        $discount->photo = $this->storeFiles($request->file('photo'),'public/photoRequirements/');
        $discount->created_at = time();
        $discount->updated_at = time();
        
    }
    public function approveByOffice(Request $request, $student_no)
    {
        $discount = Discount::find($student_no);
        $discount->officeVerification = $request->officeVerification;
        $discount->discount = $request->discount;

        return back('verify','Verify');
    }
    public function verifyByAdmin(Request $request, $student_no)
    {
        
    }
    public function verifyByOffice(Request $request, $student_no)
    {
        
    }
    private function storeFiles($file ,$path)//also store the requiments to storage path: requirements/
    {
        $name = $file->getClientOriginalName();
        $file->storeAs($path,$name);
        return $name;
    }
}
