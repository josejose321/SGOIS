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

    public function approved($type)
    {
        return $this
            ->where('officeVerification','Approved')
            ->where('adminVerification','Approved')
            ->where('scholarships.semesterCode',Semester::latest()->first()->semesterCode ?? '')
            ->whereHas('category', function($query)use($type){
                $query->where('type',$type);
            });
    }
    public function administrativeGrantees()
    {
        return $this
            ->where('officeVerification','Approved')
            ->where('adminVerification','Approved')
            ->where('scholarships.semesterCode',Semester::latest()->first()->semesterCode ?? '')
            ->whereHas('category', function($query){
                $query->where('type','Administrative')
                ->orwhere('type','Discount');
            });

    }
    public function externalGrantee()
    {
        return $this
            ->where('officeVerification','Approved')
            ->where('adminVerification','Approved')
            ->whereHas('category', function($query){
                $query->where('type','External');
            });

    }
    public function loanGrantee()
    {
        return $this
            ->where('officeVerification','Approved')
            ->where('adminVerification','Approved')
            ->where('scholarships.semesterCode',Semester::latest()->first()->semesterCode ?? '')
            ->whereHas('category', function($query){
                $query->where('type','Loan');
            });

    }

    public function admin_getPending($type)
    {
        return $this->select('scholarships.*')
        ->join('categories','scholarships.categoryNo','categories.categoryNo')
        ->where('scholarships.semesterCode',Semester::where('active',1)->latest()->first()->semesterCode ?? '')
        ->where('scholarships.type',$type)
        ->where('scholarships.adminVerification','Pending')
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
            // ->where('scholarships.semesterCode',Semester::latest()->first()->semesterCode ?? '')
            ->where('scholarships.officeVerification','Approved')
            ->where('scholarships.adminVerification','Approved')
            ->where('categories.type',$type)
            ->where('categories.officeCode',$office);
    }

    public function countApprovedApplication($category)
    {
        return $this
        ->where('semesterCode', Semester::latest()->first()->semesterCode ?? '')
        ->where('categoryNo',$category)->count();
    }


    // 'ApplicationNo',
    //         'Fullname',
    //         'Scholarship/Discount Applied',
    //         'Grants'

    public function exportAdministrativeGrants($type)
    {
        $granteeCollection = [];
        $grants =$this->select('scholarships.*')
        ->join('categories','scholarships.categoryNo', 'categories.categoryNo')
        ->join('students','scholarships.student_no','students.student_no')
        ->where('categories.type',$type)
        ->where('scholarships.officeVerification','Approved')
        ->where('scholarships.adminVerification','Approved')
        ->where('semesterCode',Semester::latest()->first()->semesterCode ?? '')->get();
        foreach($grants as $grantee)
        {
            array_push($granteeCollection,
            (object) array(
                'applicationNo' => $grantee->scholarshipNo,
                'program' => $grantee->category->name,
                'student_id' => $grantee->student->user->user_id,
                'fullname' => $grantee->student->user->lastname .
                 ', '. $grantee->student->user->firstname .
                 ' '. $grantee->student->user->middlename,
                'grant' => $grantee->discount,

                )
            );
        }
        // dd($gr);
        return (array)$granteeCollection;
    }
    public function exportExternalGrants($type)
    {
        $granteeCollection = [];
        $grants =$this->select('scholarships.*')
        ->join('categories','scholarships.categoryNo', 'categories.categoryNo')
        ->join('students','scholarships.student_no','students.student_no')
        ->where('categories.type',$type)
        ->where('scholarships.officeVerification','Approved')
        ->where('scholarships.adminVerification','Approved')
        ->where('semesterCode',Semester::latest()->first()->semesterCode ?? '')->get();
        foreach($grants as $grantee)
        {
            array_push($granteeCollection,
            (object) array(
                'applicationNo' => $grantee->scholarshipNo,
                'program' => $grantee->category->name,
                'student_id' => $grantee->student->user->user_id,
                'fullname' => $grantee->student->user->lastname .
                 ', '. $grantee->student->user->firstname .
                 ' '. $grantee->student->user->middlename,

                )
            );
        }
        // dd($gr);
        return (array)$granteeCollection;
    }





}
