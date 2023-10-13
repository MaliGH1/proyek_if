<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends model{

    protected $primaryKey = 'idCustomer';
    protected $table ='customer';

    protected $fillable = [
       'idCustomer', 'username', 'password', 'nama', 'alamat', 'email', 'no_telp','updated_at','created_at'
    ];

}