<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Office;
use App\Models\Scholarship;
use App\Models\Semester;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScholarhipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private $students;
    private $offices;
    private $semesters;
    private $categories;

    public function __construct()
    {
        $this->students =Student::all()->pluck('student_no');
        $this->offices = Office::all()->pluck('officeCode');
        $this->semesters= Semester::all()->pluck('semesterCode');
        $this->categories = Category::all()->pluck('categoryNo');
    }
    
    public function definition()
    {
        
        return [
            //
        "student_no"=> $this->faker->randomElement($this->students),
        "officeCode" =>$this->faker->randomElement($this->offices),
        "semesterCode"=>$this->faker->randomElement($this->semesters),
        "categoryNo" =>$this->faker->randomElement($this->categories),
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
