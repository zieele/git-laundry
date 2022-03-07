<?php

namespace App\Exports;

use App\Models\Outlet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class OutletExport implements FromCollection, WithHeadings, WithEvents
{
    public function headings(): array
    {
        return [
            'Nama',
            'Alamat',
            'No. Telp'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                // $event->sheet->getDelegate()->setLeftToRight(true);
                $event->sheet->getColumnDimension('A')->setAutoSize(true);
                $event->sheet->getColumnDimension('B')->setAutoSize(true);
                $event->sheet->getColumnDimension('C')->setAutoSize(true);
                $event->sheet->insertNewRowBefore(1, 3);
                $event->sheet->mergeCells('A2:C2');
                $event->sheet->setCellValue('A2', 'Data Outlet Git-laundry');
                $event->sheet->getStyle('A2')->getFont()->setBold(true);
                $event->sheet->getStyle('A4')->getFont()->setBold(true);
                $event->sheet->getStyle('B4')->getFont()->setBold(true);
                $event->sheet->getStyle('C4')->getFont()->setBold(true);
                $event->sheet->getStyle('A2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $event->sheet->getStyle('A3:D'.$event->sheet->getHighestRow())->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => 'FFFF0000']
                        ]
                    ]
                ]);
            },
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Outlet::all('nama', 'alamat', 'tlp');
    }
}
