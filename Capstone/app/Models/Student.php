<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey ='student_no';

    protected $fillable = [
        'student_no',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'departmentCode',
        'phone',
        'course',
        'year',
        'avatar',
        'password',
        'created_at',
        'updated_at'

    ];

    public function scholarships()
    {
        return $this->hasMany(Scholarship::class, "student_no","student_no");
    }
    public function discounts()
    {
        return $this->hasMany(Discount::class,"student_no","student_no");
    }
    public function loans()
    {
        return $this->hasMany(Loan::class,"student_no","student_no");
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'departmentCode','departmentCode');
    }
}
