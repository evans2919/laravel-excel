<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'numeracion'     => $row[0], //a
            'razon'    => $row[1], //b
            'eurowin' => $row[2], //c
            'castisoft' =>$row[3], //d
        ]);
    }
}
