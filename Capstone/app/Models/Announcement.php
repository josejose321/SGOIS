<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $table ="annoucements";


    protected $fillable = [
        'subject',
        'content',
        'admin_no',
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class,"admin_no","admin_no");
    }
}
