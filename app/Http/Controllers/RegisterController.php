<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => ('Register'),
            'active' => ('register')
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255','unique:customer'],
            'alamat' => 'required',
            'email' => 'required|email:dns|unique:customer',
            'no_telp' => 'required',
            'password' => 'required|min:5|max:255',
        ]);

        // dd('registrasi berhasil');
        Customer::create($validatedData);
    }
}
