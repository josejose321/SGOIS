<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
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
        'employee_no' => $this->faker->unique()->numerify('##-#####'),
        'firstname' =>$this->faker->firstName,
        'middlename' =>$this->faker->lastName,
        'lastname'=>$this->faker->lastName,
        'email'=>$this->faker->unique()->safeEmail(),
        'departmentCode' => $this->faker->randomElement(Department::all()->pluck('departmentCode')),
        'phone' =>$this->faker->numerify('09#########'),
        'position'=>$this->faker->randomElement(['Director','Office Staff','Assistant','Regular Employee']),
        'avatar' => 'defaultAvatar.jpg',
        'password' => Hash::make('password'),
        ];
    }
    protected $model = Employee::class;
}
