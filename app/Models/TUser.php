<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TUser extends Model
{
    use HasFactory;

    protected $table = 'tb_user';

    protected $fillable = [
        'nama',
        'username',
        'password',
        'id_outlet',
        'role'
    ];
}
