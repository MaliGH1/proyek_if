<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            'fullname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required|min:5|confirmed', // 'confirmed' memastikan bahwa 'password' dan 'password_confirmation' cocok
        ]);
    
        // Hash password sebelum menyimpannya
        $validatedData['password'] = bcrypt($validatedData['password']);
    
        // Tambahkan validasi untuk 'confirm-password' jika diperlukan
        // ...
    
        User::create($validatedData);
    
        // Redirect atau response lainnya setelah pengguna berhasil disimpan
    }
    
}