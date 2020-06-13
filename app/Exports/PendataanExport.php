<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;




class PendataanExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        return PendataanExport::query();
    }
}