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
            ->where('semesterCode',Semester::where('active',1)->latest()->first()->semesterCode ?? '')
            ->where('type',$type);
    }

    public function admin_getPending($type)
    {
        return $this
        ->where('semesterCode',Semester::where('active',1)->latest()->first()->semesterCode ?? '')
        ->where('type',$type)
        ->where('adminVerification','Pending')
        ->latest();
    }
    public function endorser_getPending($type)
    {
        return $this->select('scholarships.*')
        ->join('categories','scholarships.categoryNo','categories.categoryNo')
        ->where('scholarships.semesterCode',Semester::where('active',1)->latest()->first()->semesterCode ?? '')
        ->where('scholarships.officeVerification','Pending')
        ->where('scholarships.type',$type)
        ->where('categories.officeCode', Auth::user()->employee->officeCode)
        ->latest();
    }


    public function officeGrantees($office, $type)
    {
        return $this->select('scholarships.*')
            ->join('categories','scholarships.categoryNo','categories.categoryNo')
            ->where('scholarships.semesterCode',Semester::where('active',1)->latest()->first()->semesterCode ?? '')
            ->where('scholarships.officeVerification','Approved')
            ->where('scholarships.adminVerification','Approved')
            ->where('scholarships.type',$type)
            ->where('categories.officeCode',$office);
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
