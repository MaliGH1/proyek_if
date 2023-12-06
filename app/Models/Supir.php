<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
        use HasFactory;

        protected $table = 'supirs';
        protected $primaryKey = 'noktp';
        protected $fillable = [
                'noktp',
                'nama',
                'alamat',
                'nohpsupir',
                'image',
                'harga'
        ];
}
