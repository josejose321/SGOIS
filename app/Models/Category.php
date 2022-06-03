<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $primaryKey ="categoryNo";
    public $incrementing = true;

    protected $fillable =[
        'officeCode',
        'name',
        'type',
        'field_team',
        'allocation',
        'instruction'
    ];

    public function office()
    {
        return $this->belongsTo(Office::class,'officeCode','officeCode');
    }
    public function scholarships()
    {
        return $this->hasMany(Scholarship::class,'categoryNo','categoryNo');
    }

    public function getByFieldTeam($name)
    {
        return self::where('name', $name);
    }

    public function approved($categoryNo)
    {
        return self::find($categoryNo)
        ->scholarships
        ->where('officeVerification','Approved')
        ->where('adminVerification','Approved')
        ->where('semesterCode',Semester::latest()->first()->semesterCode ?? '');
    }
    public function approvedByDiscount($categoryNo, $discount)
    {
        return self::find($categoryNo)
        ->scholarships
        ->where('officeVerification','Approved')
        ->where('adminVerification','Approved')
        ->where('semesterCode',Semester::latest()->first()->semesterCode ?? '')
        ->where('discount',$discount);
    }
    public function getSummaryReport()
    {
        $categoryData = [];
        foreach(Category::where('type','Administrative')->orWhere('type','Discount')
        ->pluck('categoryNo') as $categoryNo)
        {
            $category= Category::find($categoryNo);
            array_push($categoryData,
            (object) array(
               'categoryNo' =>$category->categoryNo,
               'categoryName'=> $category->name,
               'field_team'=> $category->field_team,
               'first' => $this->approvedByDiscount($categoryNo,'10%')->count(),
               'second' => $this->approvedByDiscount($categoryNo,'15%')->count(),
               'third' => $this->approvedByDiscount($categoryNo,'25%')->count(),
               'fourth' => $this->approvedByDiscount($categoryNo,'50%')->count(),
               'fifth' => $this->approvedByDiscount($categoryNo,'75%')->count(),
               'sixth' => $this->approvedByDiscount($categoryNo,'100%')->count(),
               'seventh' => $this->approvedByDiscount($categoryNo,'Full')->count(),
               'total'=> $this->approved($categoryNo)->count(),//count scholarships where it belongs to this category
               'allocation'=> $category->allocation,
                )
            );
        }
        return $categoryData;
    }
    public function getExternalSummary()
    {
        $categoryData = [];
        foreach(Category::where('type','External')
        ->pluck('categoryNo') as $categoryNo)
        {
            $category= Category::find($categoryNo);
            array_push($categoryData,
            (object) array(
               'categoryNo' =>$category->categoryNo,
               'categoryName'=> $category->name,
               'total'=> $this->approved($categoryNo)->count(),//count scholarships where it belongs to this category
                )
            );
        }
        return $categoryData;

    }

    public function ifHasVacant($category,$totalApproved)
    {
        $allocation = $this->find($category)->allocation;
        if($allocation <= 0)
            return true;
        if($allocation <= $totalApproved)
        {
            return true;
        }
        return false;
    }


    public function searchPrograms($term)
    {
        return $this->select('categories.*')
        ->join('offices','categories.officeCode','offices.officeCode')
        ->orWhere('categories.name','LIKE','%'.$term.'%')
        ->orWhere('categories.type','LIKE','%'.$term.'%')
        ->orWhere('categories.field_team','LIKE','%'.$term.'%')
        ->orWhere('offices.name','LIKE','%'.$term.'%')
        ->orWhere('offices.description','LIKE','%'.$term.'%')
        ;
    }

}
