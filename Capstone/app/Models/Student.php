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
        'department',
        'phone',
        'course',
        'year',
        'image',
        'password',
        'created_at',
        'updated_at'

    ];
}
