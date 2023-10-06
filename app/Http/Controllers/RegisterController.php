<?php

namespace App\Http\Controllers;

use App\customer;
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
        $request->validate([
            'fullname' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255','unique:customer'],
            'email' => 'required|email:dns|unique:customer',
            'phone' => 'required',
            'password' => 'required|min:5|max:255'
        ]);

        dd('registrasi berhasil');
        // customer::create($validateData);
    }
}
