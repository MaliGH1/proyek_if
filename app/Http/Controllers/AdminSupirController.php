<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use Illuminate\Http\Request;

class AdminSupirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return 'ini halaman supir';
        return view('supir/homesupir', [
            'supirs' => Supir::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supir/tambahsupir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'noktp' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'nohpsupir' => 'required',
        ]);

        Supir::create($validateData);

        return redirect('supir')->with('success', 'Supir Baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supir $supir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($noktp)
    {
        $supir = Supir::findOrFail($noktp);
        return view('supir/updatesupir', compact('supir'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $noktp)
    {
        $request->validate([
            'noktp' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'nohpsupir' => 'required',
        ]);

        $supir = Supir::findOrFail($noktp);
        $supir->noktp = $request->noktp;
        $supir->nama = $request->nama;
        $supir->alamat = $request->alamat;
        $supir->nohpsupir = $request->nohpsupir;
        $supir->save();

        return redirect('supir')->with('success', 'Data Supir berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supir $supir)
    {
        Supir::destroy($supir->noktp);

        return redirect('supir')->with('success', 'Data Supir telah dihapus');
    }
}
