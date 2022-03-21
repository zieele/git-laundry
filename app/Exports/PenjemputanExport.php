<?php

namespace App\Exports;

use App\Models\Penjemputan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class PenjemputanExport implements FromCollection, WithHeadings, WithEvents
{
    public function headings(): array
    {
        return [
            'ID Member',
            'ID Outlet',
            'Status',
            'Nama Outlet',
            'Nama Member',
            'Alamat Member',
            'No. Tlp Member',
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
                $event->sheet->getColumnDimension('D')->setAutoSize(true);
                $event->sheet->getColumnDimension('E')->setAutoSize(true);
                $event->sheet->getColumnDimension('F')->setAutoSize(true);
                $event->sheet->getColumnDimension('G')->setAutoSize(true);
                $event->sheet->insertNewRowBefore(1, 3);
                $event->sheet->mergeCells('A2:G2');
                $event->sheet->setCellValue('A2', 'Data Penjemputan Git-laundry');
                $event->sheet->getStyle('A2')->getFont()->setBold(true);
                $event->sheet->getStyle('A4')->getFont()->setBold(true);
                $event->sheet->getStyle('B4')->getFont()->setBold(true);
                $event->sheet->getStyle('C4')->getFont()->setBold(true);
                $event->sheet->getStyle('D4')->getFont()->setBold(true);
                $event->sheet->getStyle('E4')->getFont()->setBold(true);
                $event->sheet->getStyle('F4')->getFont()->setBold(true);
                $event->sheet->getStyle('G4')->getFont()->setBold(true);
                $event->sheet->getStyle('A2')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            },
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penjemputan::join('tb_outlet', 'tb_penjemputan.id_outlet', '=', 'tb_outlet.id')->join('tb_member', 'tb_penjemputan.id_member', '=', 'tb_member.id')->select('tb_penjemputan.id_member', 'tb_penjemputan.id_outlet', 'tb_penjemputan.status', 'tb_outlet.nama', 'tb_member.nama_member', 'tb_member.alamat_member', 'tb_member.tlp_member')->get();
    }
}
