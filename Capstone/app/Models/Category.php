<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'officeCode',
        'name',
        'description'
    ];

    public function office()
    {
        return $this->belongsTo(Office::class,'officeCode','officeCode');
    }
    public function scholarships()
    {
        return $this->hasMany(Scholarship::class,'category_no','category_no');
    }
    public function discounts()
    {
        return $this->hasMany(Scholarship::class,'category_no','category_no');
    }
    public function loans()
    {
        return $this->hasMany(Scholarship::class,'category_no','category_no');
    }
}
