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

class IsiPemetaanExport implements FromView, WithStyles, WithColumnWidths, WithColumnFormatting, WithTitle
{
    public function __construct(string $jurusan)
    {
        $this->jurusan = $jurusan;
    }

    public function view(): View
    {
        return view('export.pemetaan', [
            'pemetaan' => DB::table('user')
                ->leftJoin('pemetaan', 'pemetaan.user_npm', '=', 'user.npm')
                ->where([['user.himpunan', $this->jurusan], ['user.role_id', 1]])
                ->orderBy('user.npm')->get()
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
        return $this->jurusan;
    }
    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 20,
            'C' => 30,
            'D' => 30,
            'E' => 35,
            'F' => 37,
            'G' => 30,
            'H' => 30,
            'I' => 30,
            'J' => 30,
            'K' => 30,
            'L' => 40,
            'M' => 60,
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
            'AA' => 15,
            'AB' => 15,
            'AC' => 15,
            'AD' => 15,
            'AE' => 15,
            'AF' => 15,
            'AG' => 15,
            'AH' => 15,
            'AI' => 15,
            'AJ' => 15,
            'AK' => 15,
            'AL' => 15,
            'AM' => 15,
            'AN' => 15,
            'AO' => 15,
            'AP' => 15,
            'AQ' => 15,
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
