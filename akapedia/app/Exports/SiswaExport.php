<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::all();
    }

    public function map($siswa): array
    {
        return [
            $siswa->nama,
            $siswa->jenis_kelamin,
            $siswa->agama,
            $siswa->alamat,
            $siswa->no_tlp,
            $siswa->rataNilai(),

        ];
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Jenis Kelamin',
            'Agama',
            'Alamat',
            'No Telp',
            'Rata-Rata Nilai',
        ];
    }
}
