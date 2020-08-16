<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\WawancaraExport;
use App\Exports\Wawancara2Export;
use App\Exports\Wawancara3Islam;
use App\Exports\Wawancara3Katolik;
use App\Exports\Wawancara3Protestan;

class MultipleSheet implements WithMultipleSheets
{
    use Exportable;

    public function sheets(): array
    {
        $sheets = [new WawancaraExport, new Wawancara2Export, new Wawancara3Islam, new Wawancara3Katolik, new Wawancara3Protestan];

        return $sheets;
    }
}
