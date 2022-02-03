<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $table = 'loans';
    protected $primaryKey ="loanNo";
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
