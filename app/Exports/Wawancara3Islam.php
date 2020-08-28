<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithTitle;

class Wawancara3Islam implements FromView, WithStyles, WithColumnWidths, WithColumnFormatting, WithTitle
{
    private $jurusan;

    public function __construct(string $jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function view(): View
    {
        return view('export.wawancara3islam', [
            'wawancara' => DB::table('wawancara3islam')
                ->join('wawancara', 'wawancara.npm', '=', 'wawancara3islam.npm')
                ->where('wawancara.jurusan', $this->jurusan)
                ->orderBy('wawancara.npm')
                ->get()
        ]);
    }
    public function styles(Worksheet $sheet)
    {
        return [
            1    => [
                'font' => ['bold' => true],
            ],
        ];
    }
    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_NUMBER,
        ];
    }
    public function title(): string
    {
        return 'Agama Islam';
    }
    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 20,
            'C' => 20,
            'D' => 20,
            'E' => 20,
            'F' => 20,
            'G' => 20,
            'H' => 20,
            'I' => 20,
            'J' => 20,
            'K' => 20,
            'L' => 20,
            'M' => 20,
            'N' => 20,
            'O' => 20,
            'P' => 20,
            'Q' => 20,
            'R' => 20,
            'S' => 20,
            'T' => 20,
            'U' => 20,
            'V' => 20,
            'W' => 20,
            'X' => 20,
            'Y' => 20,
            'Z' => 20,
            'AA' => 30,
            'AB' => 30,
            'AC' => 30,
            'AD' => 30,
            'AE' => 30,
            'AF' => 30,
            'AG' => 30,
            'AH' => 30,
            'AI' => 30,
            'AJ' => 30,
            'AK' => 30,
            'AL' => 30,
            'AM' => 30,
            'AN' => 30,
            'AO' => 30,
            'AP' => 30,
            'AQ' => 30,
            'AR' => 20,
            'AS' => 20,
            'AT' => 20,
            'AU' => 20,
            'AV' => 20,
            'AW' => 20,
            'AX' => 20,
            'AY' => 20,
        ];
    }
}
