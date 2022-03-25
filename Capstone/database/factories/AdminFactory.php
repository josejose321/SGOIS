<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
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
            'admin_no' => $this->faker->unique()->numerify('##-#####'),
            'firstname' =>$this->faker->firstName,
            'middlename' =>$this->faker->lastName,
            'lastname'=>$this->faker->lastName,
            'email'=>$this->faker->unique()->safeEmail(),
            'phone' =>$this->faker->numerify('09#########'),
            'position'=>$this->faker->randomElement(['Director','Staff','Assistant']),
            'avatar' => 'defaultAvatar.jpg',
            'password' => Hash::make('password'),
        ];
    }

    protected $model = Admin::class;
}
