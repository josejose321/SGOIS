<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table ='programs';
    protected $primaryKey ="program_no";
    public $incrementing = true;

    protected $fillable =[
        'officeCode',
        'name',
        'type',
        'field_team',
        'allocation',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class,'officeCode','officeCode');
    }
    public function scholarships()
    {
        return $this->hasMany(Scholarship::class,'program_no','program_no');
    }

    public function getByFieldTeam($name)
    {
        return self::where('name', $name);
    }

    public function approved($program_no)
    {
        return self::find($program_no)
        ->scholarships
        ->where('officeVerification','Approved')
        ->where('adminVerification','Approved')
        ->where('semesterCode',Semester::latest()->first()->semesterCode ?? '');
    }
    public function approvedByDiscount($program_no, $discount)
    {
        return self::find($program_no)
        ->scholarships
        ->where('officeVerification','Approved')
        ->where('adminVerification','Approved')
        ->where('semesterCode',Semester::latest()->first()->semesterCode ?? '')
        ->where('discount',$discount);
    }
    public function getSummaryReport()
    {
        $program_data = [];
        foreach(Category::all()->pluck('categoryNo') as $program_no)
        {
            $program= Program::find($program_no);
            array_push($program_data,
            (object) array(
               'program_no' =>$program->program_no,
               'programName'=> $program->name,
               'field_team'=> $program->field_team,
               'first' => $this->approvedByDiscount($program_no,'10%')->count(),
               'second' => $this->approvedByDiscount($program_no,'15%')->count(),
               'third' => $this->approvedByDiscount($program_no,'25%')->count(),
               'fourth' => $this->approvedByDiscount($program_no,'50%')->count(),
               'fifth' => $this->approvedByDiscount($program_no,'75%')->count(),
               'sixth' => $this->approvedByDiscount($program_no,'100%')->count(),
               'seventh' => $this->approvedByDiscount($program_no,'Full')->count(),
               'total'=> $this->approved($program_no)->count(),//count scholarships where it belongs to this program
               'allocation'=> $program->allocation,
                )
            );
        }
        return $program_data;
    }
}
