<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;


class SewaMobilController extends Controller
{
    public function index()
    {
        // $totalBiaya = Sewa::sum('amount');
        // return view('sewa', ['totalBiaya' => $totalBiaya]);
        return view('sewa');
    }

//     public function hitung(Request $request)
// {
//     $mobil = $request->input('angka1');
//     $supir = $request->input('angka2');
//     $hasil = $angka1 + $angka2;

//     return view('penjumlahan', ['hasil' => $hasil]);
// }

}
