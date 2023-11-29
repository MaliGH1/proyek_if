<?php

namespace App\Http\Controllers;

//importt model "Mobil"
use App\Models\Mobil;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class MobilController extends Controller
{
    public function index()
    {
        return view('mobil/homemobil', [
            "title" => "Daftar Mobil",
            "mobil" => Mobil::all()
        ]);
    }

    public function daftarmobil()
    {
        return view('daftarmobil', [
            "title" => "Daftar Mobil",
            "mobil" => Mobil::all()
        ]);
    }

    public function tambahmobil()
    {
        return view('mobil/tambahmobil');
    }

    public function updatemobil()
    {
        return view('mobil/updatemobil');
    }

    public function hapusmobil()
    {
        return view('mobil/hapusmobil');
    }
}
