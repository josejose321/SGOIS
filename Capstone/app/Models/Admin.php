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
    public $incrementing = false;

    protected $fillable = [
        'admin_no',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'phone',
        'position',
        'avatar',
        'password',
        'created_at',
        'updated_at'
    ];
    public function announcements()
    {
        return $this->hasMany(Announcement::class, 'admin_no','admin_no');
    }
}
