<?php

namespace App\Imports;

use App\Mail\RegistrationMail;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
    public function model(array $row)
    {
        if(!Student::where('user_id', $row['student_no'])->exists())
        {
            $student = new Student([
                //
                'user_id'=>$row['student_no'],
                'firstname'=>$row['firstname'],
                'middlename'=>$row['middlename'],
                'lastname'=>$row["lastname"],
                'email'=>$row['email'],
                'departmentCode'=>$row['department'],
                'phone'=>$row['phone'],
                'course'=>$row['course'],
                'year'=>$row['year'],
                'avatar'=>'defaultAvatar.jpg',
            ]);
            Mail::to($student->email)->send(new RegistrationMail($student));
            return $student;
        }
    }
}
