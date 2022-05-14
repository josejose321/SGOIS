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
        'employee_no',
    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class,"employee_no","employee_no");
    }
    public function getLatest()
    {
        return $this->latest()->take(3)->get();
    }
}
