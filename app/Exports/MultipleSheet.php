<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Exports\WawancaraExport;
use App\Exports\Wawancara2Export;
use App\Exports\Wawancara3Islam;
use App\Exports\Wawancara3Katolik;
use App\Exports\Wawancara3Protestan;
use App\Exports\Wawancara3Hindu;
use App\Exports\Wawancara3Buddha;
use App\Exports\WawancaraKesehatan;
use App\Exports\WawancaraFasilitasInternet;
use App\Exports\WawancaraSurat;

class MultipleSheet implements WithMultipleSheets
{
    use Exportable;
    protected $jurusan;

    public function __construct(string $jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function sheets(): array
    {
        $sheets = [
            new WawancaraExport($this->jurusan),
            new Wawancara2Export($this->jurusan),
            new WawancaraKesehatan($this->jurusan),
            new Wawancara3Islam($this->jurusan),
            new Wawancara3Katolik($this->jurusan),
            new Wawancara3Protestan($this->jurusan),
            new Wawancara3Hindu($this->jurusan),
            new Wawancara3Buddha($this->jurusan),
            new WawancaraFasilitasInternet($this->jurusan),
            new WawancaraSurat($this->jurusan),
        ];

        return $sheets;
    }
}
