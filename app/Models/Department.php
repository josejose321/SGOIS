<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
    public function courses()
    {
        return $this->hasMany(Course::class,'departmentCode','departmentCode');
    }
    public function searchTearm($term)
    {
        return $this
        ->whereHas('courses', function (Builder $query, $term){
            $query->orWhere('name', 'LIKE','%'.$term.'%');
        })
        ->whereHas('students', function (Builder $query, $term){
            $query
            ->orWhere('firstname','LIKE','%'.$term.'%')
            ->orWhere('middlename','LIKE','%'.$term.'%')
            ->orWhere('lastname','LIKE','%'.$term.'%')
            ->orWhere('email','LIKE','%'.$term.'%')
            ->orWhere('phone','LIKE','%'.$term.'%')
            ->orWhere('user_id','LIKE','%'.$term.'%')
            ->where('type','LIKE','student');
        })
        ->orWhere('name', 'LIKE','%'.$term.'%');
    }

}
