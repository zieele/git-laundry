<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjemputan extends Model
{
    use HasFactory;

    protected $table = 'tb_penjemputan';

    protected $fillable = [
        'id_member',
        'id_outlet',
        'status'
    ];
}
