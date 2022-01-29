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

    protected $fillable = [
        'student_no',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'department',
        'phoneNumber',
        'course',
        'year',
        'image',
        'password'

    ];
}
