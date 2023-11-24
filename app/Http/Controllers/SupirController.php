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
        return view('supir/tambahsupir');
    }

    public function updatesupir()
    {
        return view('supir/updatesupir');
    }

    public function hapussupir()
    {
        return view('supir/hapussupir');
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
    public function store(StoreSupirRequest $request)
    {
        //
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
    public function edit(Supir $supir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupirRequest $request, Supir $supir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supir $supir)
    {
        //
    }
}
