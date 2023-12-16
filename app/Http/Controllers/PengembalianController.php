<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use App\Models\Mobil;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $status = Verifikasi::where('verifikasi','DITERIMA')->get();
        return view('admin/pengembalian',compact('status')); 
    }

    public function pengembalian_selesai($id)
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