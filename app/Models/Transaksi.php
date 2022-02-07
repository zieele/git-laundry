<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'tb_transaksi';

    protected $fillable = [
        'id_outlet',
        'kode_invoice',
        'id_member',
        'tgl',
        'batas_waktuole',
        'tgl_bayar',
        'biaya_tambahan',
        'diskon',
        'pajak',
        'status',
        'lunas',
        'id_user'
    ];
}
