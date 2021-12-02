<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    protected $table = 'scholarships';
    protected $fillable = [
        "student_no",
        "officeCode",
        "Type",
        "discount",
        "status",
    ];
}
