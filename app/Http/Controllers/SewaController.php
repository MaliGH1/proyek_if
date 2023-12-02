<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Mobil;
use App\Models\Supir;
use App\Models\Customer;
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
        $customers =  Customer::all();
        return view('customer/sewa', [
            "title" => "Sewa Mobil",
            "mobils" => $mobils, // Ubah variabel $mobil menjadi $mobils
            "sopirs" => $sopirs,  // Melewatkan data sopir ke tampilan jika diperlukan
            "customers" => $customers
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
    public function store(Request $request)
    {
        $user = Auth::guard('web')->user(); // mendapatkan user yang sedang login
        if ($user) {
            $customer = Customer::where('username', $user->username)->first(); // mendapatkan objek Customer pertama yang memenuhi kondisi tersebut
            if ($customer) {
                return view('profile', compact('customer')); // kirim data customer ke view
            }
        }

        $mobil = Mobil::find($request->pilih_mobil);
        $sopir = Sopir::find($request->pilih_sopir);

        $sewa = new Sewa;
        $sewa->nama_penyewa = $request->nama_penyewa;
        $sewa->nomor_hp = $request->nomor_hp;
        $sewa->alamat = $request->alamat;
        $sewa->pilih_mobil = $mobil->nama;
        $sewa->pilih_sopir = $sopir->nama;
        $sewa->tanggal_pinjam = $request->tgl_pjm;
        $sewa->tanggal_kembali = $request->tgl_kmbl;
        $sewa->total_biaya = $mobil->harga_sewa + $sopir->harga_sewa; // hitung total biaya
        $sewa->save();
    
        return redirect('/invoice');
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
