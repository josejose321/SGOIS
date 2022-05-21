<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create()->each( function ($user){
            if($user->type == "student"){
                $student = Student::factory()->make();
                $user->student()->save($student);
            }
            else{
                $employee = Employee::factory()->make();
                $user->employee()->save($employee);
            }
        });
        //
    }
}
