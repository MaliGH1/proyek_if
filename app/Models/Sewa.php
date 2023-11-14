<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    
    protected $table = sewa;
    protected $fillable = [
        'id_mobil',
        'id_pelanggan',
        'tanggal_sewa',
        'tanggal_kembali',
        'sopir',
        'status_bayar',
        'pembayaran',
        'id_sopir',
    ];
    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'nopol');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Customer::class, 'id_pelanggan', 'id');
    }

    public function sopir()
    {
        return $this->belongsTo(Sopir::class, 'id_sopir', 'noktp');
    }
}
