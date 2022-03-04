<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private $department;

    public function definition()
    {
        return [
            //
        'student_no' => $this->faker->unique()->numerify('1#-#####') ,
        'firstname' =>$this->faker->firstName,
        'middlename' =>$this->faker->lastName,
        'lastname'=>$this->faker->lastName,
        'email'=>$this->faker->unique()->safeEmail(),
        'departmentCode' => ($this->department =$this->faker->randomElement(Department::all()->pluck('departmentCode'))),
        'phone' =>$this->faker->numerify('09#########'),
        'course' => $this->faker->randomElement(Department::find($this->department)->courses->pluck('name')),
        'year' =>strval($this->faker->numberBetween(1,5)),
        'avatar' => 'defaultAvatar.jpg',
        'password' => Hash::make('password'),
        ];
    }
    protected $model = Student::class;
}
