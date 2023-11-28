<?php

namespace App\Http\Controllers;

//importt model "Mobil"
use App\Models\Mobil;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Response;

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

    // public function getMobilImage($id)
    // {
    //     $mobil = Mobil::findOrFail($id);
    //     $imageFile = $mobil->foto; // 'foto' adalah kolom BLOB

    //     if ($imageFile) {
    //         $imageData = base64_encode($imageFile);
    //         return Response::make($imageData, 200, ['Content-Type' => 'image/jpg']); // Sesuaikan 'image/jpeg' sesuai format gambar Anda
    //     }

    //     // Jika tidak ada gambar, kirim respons tidak ditemukan atau gambar default
    //     return Response::make(null, 404);
    // }
}
