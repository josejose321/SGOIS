<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    protected $table = 'offices';
    protected $primaryKey ="officeCode";
    protected $incrementing = false;

    protected $fillable =[
        'officeCode',
        'name',
        'description'
    ];
}
