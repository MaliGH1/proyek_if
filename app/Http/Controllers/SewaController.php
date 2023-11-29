<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Mobil;
use App\Models\Supir;
use App\Http\Requests\StoreSewaRequest;
use App\Http\Requests\UpdateSewaRequest;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobils = Mobil::all();
        $sopirs = Supir::all();
        return view('customer/sewa', [
            "title" => "Sewa Mobil",
            "mobils" => $mobils, // Ubah variabel $mobil menjadi $mobils
            "sopirs" => $sopirs  // Melewatkan data sopir ke tampilan jika diperlukan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSewaRequest $request)
    {
        // Validasi request jika perlu

    $sewa = new Sewa();
    $sewa->mobil_id = $request->input('mobil');
    $sewa->sopir_id = $request->input('sopir');
    // Tambahkan informasi lainnya jika diperlukan

    $sewa->save();

    // Redirect atau tampilkan pesan sukses
    }

    /**
     * Display the specified resource.
     */
    public function show(Sewa $sewa)
    {
        return view('admin/verifikasi', [
            "title" => "Daftar Transaksi",
            "transaksi" => Sewa::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sewa $sewa)
    {
        
    }

    public function laporan(Sewa $sewa)
    {
        return view('admin/keuangan', [
            "title" => "Daftar Transaksi",
            "transaksi" => Sewa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSewaRequest $request, Sewa $sewa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sewa $sewa)
    {
        //
    }
}
