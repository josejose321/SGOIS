<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use HasFactory;


    protected $guard = 'employee';
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $table = "employees";
    protected $keyType = "string";
    protected $primaryKey = "employee_no";
    public $incrementing = false;

    protected $fillable = [
        'userNo',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'departmentCode',
        'officeCode',
        'phone',
        'position',
        'avatar',
        'password',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class,"departmentCode","departmentCode");
    }
    public function office()
    {
        return $this->belongsTo(Office::class,"officeCode","officeCode");
    }

    public function user()
    {
        return $this->belongsTo(User::class,'userNo','userNo');
    }
    public function announcements()
    {
        return $this->hasMany(Announcement::class, 'employee_no','employee_no');
    }
}
