<?php

namespace App\Exports;

use App\Models\Scholarship;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExternalGranteeExport implements FromArray, ShouldAutoSize, WithHeadings
{
    public function __construct($type)
    {
        $this->type = $type;
    }
    public function array():array
    {
        $scholarship = new Scholarship();

        return (array)$scholarship->exportAdministrativeGrants($this->type);
    }
    public function headings(): array
    {
        return [
            'ApplicationNo',
            'Scholarship/Discount Applied',
            'Student ID',
            'Fullname',
            'Grants'
        ];
    }
}
