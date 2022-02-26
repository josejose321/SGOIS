<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    protected $table = 'scholarships';
    protected $primaryKey ="scholarshipNo";
    public $incrementing = true;

    protected $fillable = [
        "student_no",
        "officeCode",
        "semesterCode",
        "catgoryNo",
        "discount",
        "requirement",
        "photo",
        "officeVerification",
        "adminVerification",
        "remarks",
        "created_at",
        "updated_at"
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
}
