<?php

namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;

class CategoryImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Category([
            //
            'officeCode' =>$row['officeCode'],
            'name'=> $row['name'],
            'type' => $row['type'],
            'field_team' =>$row['field_team'],
            'allocation'=>$row['allocation'],
        ]);
    }
}
