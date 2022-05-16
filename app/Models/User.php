<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $primaryKey = 'userNo';
    protected $table = 'users';
    protected $fillable = [
        'user_id',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'phone',
        'password',
        'avatar',
        'isActive',
        'type'
    ];


    public function student()
    {
        return $this->hasOne(Student::class, 'userNo','userNo');
    }
    public function employee()
    {
        return $this->hasOne(Employee::class, 'userNo','userNo');
    }

    public function getStudent()
    {
        return $this->where('type','student');
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
