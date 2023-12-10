<?php

namespace App\Http\Controllers;

use App\Models\Verifikasi;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    public function index()
    {
        return view('admin/verifikasi', [
            "title" => "Verifikasi",
            "transaksi" => Verifikasi::all()
        ]);
    }

    public function approve_transaksi($id) {
        $status = Verifikasi::find($id);

        $status->verifikasi='Approved';
        $status->save();
        return redirect()->back()->with('success', 'Transaksi Diterima');
    }

    public function reject_transaksi($id) {
        $status = Verifikasi::find($id);

        $status->verifikasi='Rejected';
        $status->save();
        return redirect()->back()->with('success', 'Transaksi Ditolak');
    }
}
