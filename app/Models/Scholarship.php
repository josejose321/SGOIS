<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Scholarship extends Model
{
    use HasFactory;
    protected $table = 'scholarships';
    protected $primaryKey ="scholarshipNo";
    public $incrementing = true;

    protected $fillable = [
        "student_no",
        "type",
        "officeCode",
        "semesterCode",
        "categoryNo",
        "discount",
        "requirement",
        "photo",
        "officeVerification",
        "adminVerification",
        "remarks"
    ];
    public function student()
    {
        return $this->belongsTo(Student::class,"student_no","student_no");
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class,"semesterCode","semesterCode");
    }
    public function office()
    {
        return $this->belongsTo(Office::class,"officeCode","officeCode");
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'categoryNo','categoryNo');
    }

    // public function countApproved($type)
    // {
    //      return $this->where('officeVerification','Approved')
    //         ->where('adminVerification','Approved')
    //         ->where('type',$type)->count();
    // }
    public function approved($type)
    {
        return self::where('officeVerification','Approved')
            ->where('adminVerification','Approved')
            ->where('type',$type);
    }

    public function admin_getPending($type)
    {
        return $this
        ->where('semesterCode',Semester::where('active',1)->latest()->first()->semesterCode)
        ->where('type',$type)
        ->where('adminVerification','Pending')
        ->latest()->simplePaginate(10);
    }
    public function endorser_getPending($type)
    {
        return $this
        ->where('semesterCode',Semester::where('active',1)->latest()->first()->semesterCode)
        ->where('officeVerification','Pending')
        ->where('type',$type)
        ->where('officeCode', Auth::user()->employee->officeCode)
        // ->whereHas('category', function ($query){
        //     $query->where('officeCode', Auth::user()->employee->officeCde);
        // })
        ->latest();
    }


    public function officeGrantees($office, $type)
    {
        return $this->where('officeVerification','Approved')
            ->where('adminVerification','Approved')
            ->where('type',$type)
            ->where('officeCode',$office);
    }


    public function getPendingDeansVerification($departmentCode)
    {
        return $this->select('scholarships.*')
        ->join('students','scholarships.student_no','=','students.student_no')
        //->where('deansVerification','Pending')
        ->where('students.departmentCode',$departmentCode)
        ->where('students.status','Active')
        ->get();
    }





}
