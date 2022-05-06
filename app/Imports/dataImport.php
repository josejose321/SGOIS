<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class dataImport implements WithMultipleSheets
{
    /**
    * @param Collection $collection
    */
    public function sheets(): array
    {
        return[
            'departments' => new DepartmentImport(),
            'courses' => new CourseImport(),
            'offices' => new OfficeImport(),
            'categories' => new CategoryImport(),
            'students'=> new StudentsImport
        ];
    }
}
