<?php

namespace App\Exports;

use App\Models\Keluarga;
use App\Models\AnggotaKeluarga;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KeluargaExport implements FromCollection, WithMapping, WithHeadings
{
    public function __construct(int $keluarga_id)
    {
        $this->keluarga_id = $keluarga_id;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
//        return Keluarga::all();
        return AnggotaKeluarga::where('keluarga_id', $this->keluarga_id)->get();
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->keluarga->kode_kk,
            $row->keluarga->profile_kepala_keluarga->nama,
            $row->profile->nama,
            $row->profile->jenis_kelamin,
            Carbon::parse($row->profile->tanggal_lahir)->toFormattedDateString(),
            $row->profile->pekerjaan->name,
            $row->profile->pendidikan->name,
            $row->status_keluarga
        ];
    }

    public function headings() : array {
        return [
            '#',
            'Kode KK',
            'Kepala Keluarga',
            'Nama Anggota Jemaat',
            'Jenis Kelamin',
            'Tanggal Lahir',
            'Pekerjaan',
            'Pendidikan Terakhir',
            'Hubungan Keluarga'
        ] ;
    }


}
