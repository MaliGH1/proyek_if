<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends model{

    protected $primaryKey = 'nopol';

    protected $fillable = [
        'nopol', 'nama', 'type', 'tgl_pjk', 'status', 'warna', 'harga_sewa', 'foto',
    ];

}