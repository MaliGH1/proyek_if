<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $primaryKey = 'idSupir';

    protected $fillable = [
        'nama', 'alamat', 'nohpsupir', 'foto'
    ];
    
}
