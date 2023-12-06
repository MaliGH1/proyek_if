<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AdminMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return 'ini halaman mobil';
        return view('mobil/homemobil', [
            'mobils' => Mobil::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil/tambahmobil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_mobil' => 'required',
            'nopol' => 'required',
            'warna' => 'required',
            'type' => 'required',
            'sewa' => 'required',
            'tgl_pjk' => 'required',
            'foto' => 'image|file|max:5000'
        ]);

        if ($request->file('foto')) {
            $validateData['foto'] = $request->file('foto')->store('foto-mobil');
        }

        Mobil::create($validateData);

        return redirect('mobil')->with('success', 'Mobil Baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobil $mobil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil/updatemobil', compact('mobil'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nopol' => 'required',
            'warna' => 'required',
            'type' => 'required',
            'sewa' => 'required',
            'tgl_pjk' => 'required',
        ]);

        $mobil = Mobil::findOrFail($id);
        $mobil->nopol = $request->nopol;
        $mobil->warna = $request->warna;
        $mobil->type = $request->type;
        $mobil->sewa = $request->sewa;
        $mobil->tgl_pjk = $request->tgl_pjk;
        $mobil->save();

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
            $imagePath = 'storage/images/' . $imageName;
            $image->move(public_path('storage/images'), $imageName);
            $mobil->foto = $imagePath;
        }

        return redirect('mobil')->with('success', 'Data Mobil berhasil diupdate');
    }

    public function destroy(Mobil $mobil)
    {
        Mobil::destroy($mobil->id);

        return redirect('mobil')->with('success', 'Data Mobil telah dihapus');
    }
}
