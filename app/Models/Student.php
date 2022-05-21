<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
