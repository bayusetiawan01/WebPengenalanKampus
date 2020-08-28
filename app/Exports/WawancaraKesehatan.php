<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithTitle;
use Illuminate\Support\Facades\DB;

class WawancaraKesehatan implements FromView, WithStyles, WithColumnWidths, WithColumnFormatting, WithTitle
{
    private $jurusan;

    public function __construct(string $jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function view(): View
    {
        return view('export.wawancara_kesehatan', [
            'wawancara' => DB::table('wawancara4')
                ->join('wawancara', 'wawancara.npm', '=', 'wawancara4.npm')
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
        return 'Kesehatan';
    }
    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 20,
            'C' => 30,
            'D' => 30,
            'E' => 30,
            'F' => 30,
            'G' => 30,
            'H' => 30,
            'I' => 30,
            'J' => 30,
            'K' => 30,
            'L' => 30,
            'M' => 30,
            'N' => 30,
            'O' => 30,
            'P' => 30,
            'Q' => 30,
            'R' => 30,
            'S' => 30,
            'T' => 30,
            'U' => 30,
            'V' => 30,
            'W' => 30,
            'X' => 30,
            'Y' => 30,
            'Z' => 30,
        ];
    }
}
