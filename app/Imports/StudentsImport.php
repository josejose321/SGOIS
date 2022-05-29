<?php

namespace App\Imports;

use App\Mail\RegistrationMail;
use App\Models\Student;
use App\Models\User;
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
        if(!User::where('user_id', $row['student_no'])->exists())
        {
            $student = User::create([
                //

                'user_id'=>$row['student_no'],
                'firstname'=>$row['firstname'],
                'middlename'=>$row['middlename'],
                'lastname'=>$row["lastname"],
                'email'=>$row['email'],
                'phone'=>$row['phone'],
                'password'=>Hash::make($row['student_no'])
            ])->user()->create([
                'year'=> $row['year']
            ]);
            return new RegistrationMail($student);
            Mail::to($student->user->email)->send(new RegistrationMail($student));
            return $student;
        }
        return null;
    }
}
