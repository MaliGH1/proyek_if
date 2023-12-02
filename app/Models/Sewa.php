<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'nama_customer',
        'nohp',
        'alamat',
        'nama_mobil',
        'nama_supir',
        'tanggal_pinjam',
        'tanggal_kembali',
        'total_biaya'
    ];
}
