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
        'active',
        'deadline'
    ];
    public function scholarships()
    {
        return $this->hasMany(Scholarship::class,"semesterCode","semesterCode");
    }
    public function loans()
    {
        return $this->hasMany(Loan::class,"semesterCode","semesterCode");
    }

    public function getLatest()
    {
        return $this
        ->where('active',1)
        ->latest()->first();
    }
    public function getALL()
    {
        return $this
        ->orderBy('active', 'DESC')
        ->latest();
    }

    public function getActive()
    {
        return $this
        ->where('active',1);
    }

}
