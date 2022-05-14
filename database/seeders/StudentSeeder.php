<?php

namespace Database\Seeders;

use App\Imports\StudentsImport;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Student::factory()->count(10)->create();
        //Excel::import(new StudentsImport, Storage::url(''));
    }
}
