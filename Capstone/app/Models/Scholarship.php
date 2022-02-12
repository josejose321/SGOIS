<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    protected $table = 'scholarships';
    protected $primaryKey ="scholarshipNo";
    public $incrementing = true;

    protected $fillable = [
        "student_no",
        "officeCode",
        "semesterCode",
        "type",
        "field",
        "discount",
        "requirement",
        "photo",
        "officeVerification",
        "adminVerification",
        "created_at",
        "updated_at"
    ];
}
