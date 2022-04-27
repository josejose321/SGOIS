<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Office;
use App\Models\Scholarship;
use App\Models\Semester;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScholarshipFactory extends Factory
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
        "student_no"=> $this->faker->randomElement(Student::all()->pluck('student_no')),
        "officeCode" =>$this->faker->randomElement(Office::all()->pluck('officeCode')),
        "semesterCode"=>$this->faker->randomElement(Semester::all()->pluck('semesterCode')),
        "categoryNo" =>$this->faker->randomElement(Category::all()->pluck('categoryNo')),
        "discount" =>$this->faker->randomElement(['25','50','75','full']) ,
        "requirement" =>'requirement.pdf',
        "photo"=>'photo.jpg',
        "officeVerification" =>'Pending',
        "adminVerification"=>'Pending',
        "remarks" =>'for verification',
        ];
    }

    protected $model = Scholarship::class;
}
