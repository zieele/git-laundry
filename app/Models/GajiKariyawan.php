<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GajiKariyawan extends Model
{
    use HasFactory;

    protected $table = 'tb_gaji_karyawan';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'status_menikah',
        'jumlah_anak',
        'gaji_awal',
        'gaji_tunjangan'
    ];
}
