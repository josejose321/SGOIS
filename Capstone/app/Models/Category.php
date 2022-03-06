<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table ='categories';
    protected $primaryKey ="categoryNo";
    public $incrementing = true;
    
    protected $fillable =[
        'officeCode',
        'name',
        'memberCount',
        'description'
    ];

    public function office()
    {
        return $this->belongsTo(Office::class,'officeCode','officeCode');
    }
    public function scholarships()
    {
        return $this->hasMany(Scholarship::class,'categoryNo','categoryNo');
    }
    public function discounts()
    {
        return $this->hasMany(Discount::class,'categoryNo','categoryNo');
    }
    public function loans()
    {
        return $this->hasMany(Loan::class,'categoryNo','categoryNo');
    }
}
