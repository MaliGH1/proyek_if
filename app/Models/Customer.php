<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends model{

    protected $primaryKey = 'idCustomer';

    protected $fillable = [
        'nama', 'username', 'email', 'alamat', 'phone', 'password',
    ];

}