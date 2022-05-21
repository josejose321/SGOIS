<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Department;
use App\Models\Student;
use App\Models\User;
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
            'year' => $this->faker->randomElement(['1st Year','2nd Year','3rd Year','4th Year','5th Year',]),
            'courseNo'=> $this->faker->randomElement(Course::all()->pluck('courseNo')),
            'parentName'=> $this->faker->name,
        ];
    }
    protected $model = Student::class;
}
