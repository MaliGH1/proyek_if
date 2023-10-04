<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends model{

    protected $primaryKey = 'nopol';

    protected $fillable = [
        'nopol', 'nama_kendaraan', 'type', 'tanggal_pajak', 'status', 'warna', 'harga_sewa', 'foto',
    ];

}