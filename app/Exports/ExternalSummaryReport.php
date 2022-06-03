<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExternalSummaryReport implements FromArray, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array():array
    {
        $report = new Category();

        return (array)$report->getExternalSummary();
    }
    public function headings(): array
    {
        return [
            'No.',
            'Category',
            'Total',];
    }
}
