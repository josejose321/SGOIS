<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    public $incrementing = false;
    protected $primaryKey ='student_no';

    protected $fillable = [
        'user_id',
        'year',
        'courseNo',
        'parentName',
    ];

    public function scholarships()
    {
        return $this->hasMany(Scholarship::class, "student_no","student_no");
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'departmentCode','departmentCode');
    }
    public function course()
    {
        return $this->hasOne(Course::class,'courseNo','courseNo');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'userNo','userNo');
    }
    public function searchStudent($term)
    {
        return $this->select('students.*')
        ->join('users','students.userNo', 'users.userNo')
        ->join('courses', 'students.courseNo','courses.courseNo')
        ->join('departments', 'courses.departmentCode','departments.departmentCode')
        ->orWhere('users.firstname','LIKE','%'.$term.'%')
        ->orWhere('users.middlename','LIKE','%'.$term.'%')
        ->orWhere('users.lastname','LIKE','%'.$term.'%')
        ->orWhere('users.email','LIKE','%'.$term.'%')
        ->orWhere('users.phone','LIKE','%'.$term.'%')
        ->orWhere('users.user_id','LIKE','%'.$term.'%')
        ->orWhere('courses.name','LIKE','%'.$term.'%')
        ->orWhere('departments.name','LIKE','%'.$term.'%')
        ->where('type','student');
    }

    public function getGrantees()
    {
        return $this
        ->whereHas('scholarships',function($query){
            $query->where('semesterCode', Semester::latest()->first()->semesterCode ?? '')
            ->where('officeVerification','Approved')
            ->where('adminVerification','Approved');
        });
    }
    public function getActiveStudent()
    {
        return $this
        ->whereHas('user', function($query){
            $query->where('isActive',1);
        });
    }
}
