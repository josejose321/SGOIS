<?php

namespace App\Exports;

use App\Models\Category;
use App\Models\Scholarship;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SummaryReport implements FromArray, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {

    //     $report = new Category;

    //     return $report->getSummaryReport();
    //     // return Scholarship::all();

    // }
    public function array():array
    {
        $report = new Category;

        return (array)$report->getSummaryReport();
    }
    public function headings(): array
    {
        return [
            'No.',
            'Category',
            'Field_team',
            '10%',
            '15%',
            '25%',
            '50%',
            '75%',
            '100%',
            'Full%',
            'Total',
            'Allocation'];
    }
}
