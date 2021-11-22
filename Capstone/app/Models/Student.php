<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'Students';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $dates = [
        'created_at',
        'updated_at'
    ];
    protected $fillable = [
        'student_no',
        'firstname',
        'middlename',
        'lastname',
        'suffix',
        'department',
        'phoneNumber',
        'course',
        'year',

    ];
}
