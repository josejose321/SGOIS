<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class EmployeeFactory extends Factory
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
        'student_no' => strval($this->faker->unique()->numberBetween(12,19)).'-'.strval($this->faker->numberBetween(9999,99999)),
        'firstname' =>$this->faker->firstName,
        'middlename' =>$this->faker->lastName,
        'lastname'=>$this->faker->lastName,
        'email'=>$this->faker->unique()->safeEmail(),
        'departmentCode' => Department::factory(),
        'phone' =>$this->faker->phoneNumber,
        'position'=>$this->faker->randomElement('Director','Staff','Assistant'),
        'avatar' => 'defaultAvatar.jpg',
        'password' => Hash::make('password'),
        ];
    }
}
