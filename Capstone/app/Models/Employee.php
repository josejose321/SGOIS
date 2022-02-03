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

    protected $fillable = [
        'employee_no',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'department',
        'phone',
        'position',
        'avatar',
        'password',
        'created_at',
        'updated_at'
    ];
}
