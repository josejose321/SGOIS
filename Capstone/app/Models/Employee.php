<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $keyType = "string";
    protected $primaryKey = "employee_no";
    public $incrementing = false;

    protected $fillable = [
        'employee_no',
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
        'created_at',
        'updated_at'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class,"employee_no","employee_no");
    }
    public function office()
    {
        return $this->belongsTo(Office::class,"officeCode","officeCode");
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_no','employee_no');
    }
}
