<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            // DepartmentSeeder::class,
            // CourseSeeder::class,
            // OfficeSeeder::class,
            // CategorySeeder::class,
            // AdminSeeder::class,
            // EmployeeSeeder::class,
            // StudentSeeder::class,
            // ScholarshipSeeder::class,
            // UserSeeder::class
        ]);
    }
}
