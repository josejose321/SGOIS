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
        'user_id',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'departmentCode',
        'phone',
        'course',
        'year',
        'avatar',
        'status',

    ];

    public function scholarships()
    {
        return $this->hasMany(Scholarship::class, "student_no","student_no");
    }
    public function discounts()
    {
        return $this->hasMany(Discount::class,"student_no","student_no");
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'departmentCode','departmentCode');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','user_id');
    }
}
