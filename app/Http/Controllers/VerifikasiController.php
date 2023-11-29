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
}
