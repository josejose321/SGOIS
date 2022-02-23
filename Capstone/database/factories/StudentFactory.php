<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            //
        'student_no' => $this->faker->unique()->numerify('1#-#####') ,
        'firstname' =>$this->faker->firstName,
        'middlename' =>$this->faker->lastName,
        'lastname'=>$this->faker->lastName,
        'email'=>$this->faker->unique()->safeEmail(),
        'departmentCode' => $this->faker
        ->randomElement(['UNCCCS','UNCLAW','UNCEA','UNCELEM','UNCJHS','UNCSHS','UNCCE','UNCAS','UNCLAW','UNCCJE','UNCCBA','UNCCN']),
        'phone' =>$this->faker->numerify('09#########'),
        'course' => $this->faker->randomElement(['BSIT','BSCS','BSIS']),
        'year' =>strval($this->faker->numberBetween(1,5)),
        'avatar' => 'defaultAvatar.jpg',
        'password' => Hash::make('password'),
        ];
    }
    protected $model = Student::class;
}
