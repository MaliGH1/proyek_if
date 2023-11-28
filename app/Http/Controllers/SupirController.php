<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use App\Http\Requests\StoreSupirRequest;
use App\Http\Requests\UpdateSupirRequest;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('supir/homesupir', [
            "title" => "Daftar Supir",
            "supir" => Supir::all()
        ]);
    }

    public function tambahsupir()
    {   
        return view('supir.tambahsupir');
    }

    public function updatesupir()
    {
        return view('supir.updatesupir');
    }

    public function hapussupir()
    {
        return view('supir.hapussupir');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupirRequest $request)
    {
        try {
            // Validation is already performed by StoreSupirRequest
    
            // Create a new instance of the Supir model
            $supir = new Supir([
                'noktp' => $request->input('noktp'),
                'nama' => $request->input('nama'),
                'alamat' => $request->input('alamat'),
                'nohpsupir' => $request->input('nohpsupir'),
                'image' => $request->input('image'),
            ]);
    
            // Save the Supir model to the database
            $supir->save();
    
            // Redirect to a specific route after successful save
            return redirect()->route('supir.index')->with('success', 'Supir berhasil ditambahkan!');
        } catch (\Exception $e) {
            // Log the exception for further analysis
            \Log::error($e);
    
            // Redirect back with an error message
            return redirect()->back()->with('error', 'Gagal menambahkan supir. Silakan cek log untuk informasi lebih lanjut.');
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Supir $supir)
    {
        return view('supir.show', ['supir' => $supir]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supir $supir)
    {
        return view('supir.edit', ['supir' => $supir]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupirRequest $request, Supir $supir)
    {
        $supir -> update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nohpsupir' => $request->input('nohpsupir'),
            'foto' => $request->input('image'),
        ]);
        return redirect()->route('supir.index')->with('success', 'Supir berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supir $supir)
    {
        $supir->delete();

        return redirect()->route('supir.index')->with('success', 'Supir berhasil dihapus!');
    }
}
