<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\IsiPemetaanExport;

class PemetaanSheet implements WithMultipleSheets
{
    use Exportable;

    public function sheets(): array
    {
        $sheets = [
            new IsiPemetaanExport('Matematika'),
            new IsiPemetaanExport('Kimia'),
            new IsiPemetaanExport('Biologi'),
            new IsiPemetaanExport('Fisika'),
            new IsiPemetaanExport('Statistika'),
            new IsiPemetaanExport('Geofisika'),
            new IsiPemetaanExport('TeknikInformatika'),
            new IsiPemetaanExport('TeknikElektro'),
            new IsiPemetaanExport('Aktuaria'),
        ];

        return $sheets;
    }
}
