<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Office;
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
            'officeCode' => $this->faker->randomElement(Office::all()->pluck('officeCode')),
        ];
    }
    protected $model = Employee::class;
}
