<?php

namespace App\Imports;

use App\Kader;
use Maatwebsite\Excel\Concerns\ToModel;

class KaderImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kader([
            'nama' => $row[1],
            'jabatan' => $row[2], 
            'tp_lahir' => $row[3],
            'tgl_lahir' => $row[4],
            'alamat' => $row[5], 
            'id_sekol' => $row[6],
            'id_rant' => $row[7],
        ]);
    }
}
