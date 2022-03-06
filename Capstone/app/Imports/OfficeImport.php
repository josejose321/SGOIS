<?php

namespace App\Imports;

use App\Models\Office;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OfficeImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Office([
            //
            'officeCode'=> $row['officeCode'],
            'name'=>$row['name'],
            'description'=>$row['description']
        ]);
    }
}
