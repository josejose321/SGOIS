<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $primaryKey ='courseNo';


    protected $fillable = [
        'departmentCode',
        'name',
        'description'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class,'departmentCode','departmentCode');
    }

    public function student()
    {
        return $this->hasMany(Student::class,'courseNo','courseNo');
    }
}
