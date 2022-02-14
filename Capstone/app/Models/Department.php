<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $primaryKey ="departmentCode";
    public $incrementing = false;


    protected $fillable = [
        'departmentCode',
        'name',
        'description'
    ];

    public function students()
    {
        return $this->hasMany(Student::class,"departmentCode","departmentCode");
    }

    public function employees()
    {
        return $this->hasMany(Employee::class,"departmentCode","departmentCode");
    }

}
