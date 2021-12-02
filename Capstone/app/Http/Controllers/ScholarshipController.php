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
        $scholarhip = new Scholarship;
        $scholarhip->create($data = $request->post());

        return redirect()->back();
    }
    public function approveByOffice(Request $request, $student_no)
    {
        $scholarhip = Scholarship::find($student_no);
        $scholarhip->status = $request->get('status');
    }
    public function approveByDirector(Request $request, $student_no)
    {
        
    }

}
