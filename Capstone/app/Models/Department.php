<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $primaryKey ="departmentCode";
    protected $incrementing = true;


    protected $fillable = [
        'departmentCode',
        'name',
    ];
}
