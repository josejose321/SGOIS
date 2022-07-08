<?php

namespace App\Imports;

use App\Mail\RegistrationMail;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToCollection, WithHeadingRow, SkipsOnError
{
    use SkipsErrors, Importable;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

        foreach($collection as $row)
        {
            if(!User::where('user_id', $row['student_no'])->exists())
            {
                $student= User::create([
                    'user_id'=>$row['student_no'],
                    'firstname'=>$row['firstname'],
                    'middlename'=>$row['middlename'],
                    'lastname'=>$row["lastname"],
                    'email'=>$row['email'],
                    'phone'=>$row['phone'],
                    'password'=>Hash::make('password')
                ])->student()->create([
                    'year'=> $row['year'],
                   ]);
                Mail::to($student->user->email)->send(new RegistrationMail($student));
            }
        }


    }
}
