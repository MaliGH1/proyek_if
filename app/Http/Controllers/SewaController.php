<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Mobil;
use App\Models\Supir;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $customer = Customer::where('username', $user->username)->first();

        $mobil = Mobil::find($request->pilih_mobil);
        $sopir = Supir::find($request->pilih_sopir);
        

        $nama = $request->input('nama');
        $nohp = $request->input('nohp');
        $waktu_pjm = $request->input('tgl_pjm');
        $durasi = $request->input('durasi');
        $alamat = $request->input('alamat');
        $nopol = $request->input('nopol');
        $jaminan = $request->input('jaminan');
        $mobil = $request->input('mobil');
        $sopir = $request->input('sopir');
        $total = $request->input('total');

        $waktu_balik = date('Y-m-d H:i:s', strtotime("+$durasi hours", strtotime($waktu_pjm)));

        $lastRecord = Sewa::orderBy('id', 'desc')->first();
        $newId = $lastRecord ? $lastRecord->id + 1 : 1;

        $no_invoice = 'RNT' . str_pad($newId, 5, '0', STR_PAD_LEFT);

        

        Sewa::create([
            'no_invoice' => $no_invoice,
            'nama_customer' => $nama,
            'nohp' => $nohp,
            'alamat' => $alamat,
            'nama_mobil' => $mobil,
            'nopol' => $nopol,
            'nama_supir' => $sopir,
            'tanggal_pinjam' => $waktu_pjm,
            'tanggal_kembali' => $waktu_balik,
            'jaminan' => $jaminan,
            'total_biaya' => $total
        ]);

        // $sewa->nama_penyewa = $request->nama_penyewa;
        // $sewa->nomor_hp = $request->nomor_hp;
        // $sewa->alamat = $request->alamat;
        // $sewa->pilih_mobil = $mobil->nama;
        // $sewa->pilih_sopir = $sopir->nama;
        // $sewa->tanggal_pinjam = $request->tgl_pjm;
        // $sewa->tanggal_kembali = $request->tgl_kmbl;
        // $sewa->total_biaya = $mobil->harga_sewa + $sopir->harga_sewa; // hitung total biaya
        // $sewa->save();

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

    public function invoice(Sewa $sewa)
    {
        $sewa = new Sewa;
        // Ambil data sewa terakhir
        $sewa = Sewa::latest()->first();
        $mobil = Mobil::latest()->first();
        $sopir = Supir::latest()->first();

        // Jika tidak ada data sewa, redirect ke halaman sebelumnya
        if (!$sewa) {
            return redirect()->back();
        }

        // Tampilkan halaman invoice dengan data sewa
        return view('customer/invoice', [
            'sewa' => $sewa,
            'mobil' => $mobil,
            'sopir' => $sopir
        ]);
    }

    public function updateInvoice(Request $request)
    {
        $request->validate([
            'bukti' => 'required'
        ]);

        $sewa = Sewa::latest()->first();
        $sewa->save();

        if ($request->hasFile('bukti')) {
            $image = $request->file('bukti');
            $imageName = $image->getClientOriginalName();
            $imagePath = 'storage/images/' . $imageName;
            $image->move(public_path('storage/images'), $imageName);
            $sewa->bukti = $imagePath;
        }

        return redirect('home')->with('success', 'Bukti transfer telah diunggah! Halaman akan kembali ke home...');
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
