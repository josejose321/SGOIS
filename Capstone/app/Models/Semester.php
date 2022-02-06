<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $table = 'semesters';
    protected $primaryKey ="semesterCode";
    public $incrementing = false;

    protected $fillable =  [
        "semesterCode",
        "sem",
        "year",
        "period",
        "created_at",
        "updated_at"
    ];

}
