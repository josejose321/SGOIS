<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class StudentsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $students;
    public function __construct()
    {
        $this->students = Student::all();
    }
    public function model(array $row)
    {
        return new Student([
            //
            'student_no'=>$row['student_no'],
            'firstname'=>$row['firstname'],
            'middlename'=>$row['middlename'],
            'lastname'=>$row["lastname"],
            'email'=>$row['email'],
            'department'=>$row['department'],
            'phone'=>$row['phone'],
            'course'=>$row['course'],
            'year'=>$row['year'],
            'avatar'=>'test',
            'password'=>Hash::make($row['student_no']),
            'created_at'=>time(),
            'updated_at'=>time()
        ]);
    }
}
