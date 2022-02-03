<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "admins";
    protected $keyType = "string";
    protected $primaryKey = "admin_no";

    protected $fillable = [
        'admin_no',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'department',
        'phone',
        'position',
        'image',
        'password',
        'created_at',
        'updated_at'
    ];
}
