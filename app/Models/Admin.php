<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    use Notifiable;

    protected $guard = 'admin';
    protected $hidden = [
        'password', 'remember_token',
    ];


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
    ];
    public function announcements()
    {
        return $this->hasMany(Announcement::class, 'admin_no','admin_no');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_no','admin_no');
    }

}
