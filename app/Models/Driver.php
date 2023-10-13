<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSupir';

    protected $fillable = [
        'idSupir', 'nama_supir', 'alamat_supir', 'no_telp_supir', 'foto_supir'
    ];
}
