<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;


use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index()
    {
        $status = Verifikasi::where('verifikasi','SELESAI')->get();
        return view('admin/keuangan',compact('status')); 
    }
    public function pengembalian($id)
    {
        $status = Verifikasi::find($id);
        $mobil = Mobil::where('nama_mobil', $status->nama_mobil)->first();

        if ($mobil) {
            $mobil->status = 'Tersedia';
            $mobil->save();
        }

        $status->verifikasi = 'SELESAI';
        $status->save();
        return redirect()->back()->with('success', 'Transaksi Selesai');
    }
}