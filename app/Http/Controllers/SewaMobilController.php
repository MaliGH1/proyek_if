<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi; // Ganti 'Transaksi' dengan model yang sesuai


class SewaMobilController extends Controller
{
    public function index()
    {
        return view('sewa');
    }
    // untuk menampilkan total biaya di sewa
    //     public function showForm()
    // {
    //     $transaksi = Transaksi::find($id); // Gantilah $id dengan ID transaksi yang sesuai
    //     return view('form', ['transaksi' => $transaksi]);
    // }

    //     public function prosesForm(Request $request)
    // {
    //     // Validasi input jika diperlukan
    //     $request->validate([
    //         'total_biaya' => 'numeric',
    //         // Tambahkan validasi lainnya sesuai kebutuhan
    //     ]);

    //     // Simpan data ke database atau lakukan tindakan lain sesuai dengan kebutuhan aplikasi
    // }

}
