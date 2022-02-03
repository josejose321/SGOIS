<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discounts';
    protected $primaryKey ="discountNo";
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
