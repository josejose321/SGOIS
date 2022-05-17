<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = 'applications';
    protected $primaryKey ="application_no";
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
        return $this->belongsTo(Category::class,'program_no','program_no');
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
        return $this->where('type',$type)
        ->where('adminVerification','Pending')
        ->latest()->simplePaginate(10);
    }


    public function officeGrantees($office, $type)
    {
        return $this->where('officeVerification','Approved')
            ->where('adminVerification','Approved')
            ->where('type',$type)
            ->where('officeCode',$office);
    }
    // public function countGrantees($office, $type)
    // {
    //     return $this->select('scholarships.*')
    //         ->join('categories','categories.categoryNo','scholarships.categoryNo')
    //         ->where('scholarships.officeVerification','Approved')
    //         ->where('scholarships.adminVerification','Approved')
    //         ->where('categories.type',$type)
    //         ->where('scholarships.officeCode',$office)
    //         ->count();
    // }

    // public function getByType($type)
    // {
    //     return $this->select('scholarships.*')
    //     ->join('categories','categories.categoryNo','scholarships.categoryNo')
    //         ->where('scholarships.officeVerification','Approved')
    //         ->where('scholarships.adminVerification','Approved')
    //         ->where('categories.type',$type)->get();
    // }

    public function getPendingDeansVerification($departmentCode)
    {
        return $this->select('applications.*')
        ->join('students','applications.student_no','=','students.student_no')
        //->where('deansVerification','Pending')
        ->where('students.departmentCode',$departmentCode)
        ->where('students.status','Active')
        ->get();
    }

}
