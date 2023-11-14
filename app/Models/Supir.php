<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    protected $primaryKey = 'noktp';

    protected $fillable = [
        'noktp','nama', 'alamat', 'nohpsupir', 'foto'
    ];
    
}
