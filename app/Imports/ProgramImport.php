<?php

namespace App\Imports;

use App\Models\Program;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProgramImport implements ToModel,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Program([
            //
            'officeCode' =>$row['officeCode'],
            'name'=> $row['name'],
            'type' => $row['type'],
            'field_team' =>$row['field_team'],
            'allocation'=>$row['allocation'],
        ]);
    }
}
