<?php

namespace App\Models;

use DiscountTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $table = 'offices';
    protected $primaryKey ="officeCode";
    public $incrementing = false;

    protected $fillable =[
        'officeCode',
        'name',
        'description'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class,"officeCode","officeCode");
    }
    public function scholarships()
    {
        return $this->hasMany(Scholarship::class,"officeCode","officeCode");
    }
    public function discounts()
    {
        return $this->hasMany(Discount::class,"officeCode","officeCode");
    }
    public function loans()
    {
        return $this->hasMany(Loan::class,"officeCode","officeCode");
    }
}
