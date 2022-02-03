<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Row;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            //
            'student_no'=>$row[0],
            'firstname'=>$row[1],
            'middlename'=>$row[2],
            'lastname'=>$row[3],
            'email'=>$row[4],
            'department'=>$row[5],
            'phone'=>$row[6],
            'course'=>$row[7],
            'year'=>$row[8],
            'image'=>'test',
            'password'=>Hash::make($row[0]),
            'created_at'=>time(),
            'updated_at'=>time()
        ]);
    }
}
