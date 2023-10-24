<?php

namespace App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Pengguna berhasil masuk. Sekarang kita akan memeriksa perannya.
            $user = Auth::user();
            $role = $user->role;

            if ($role === 'admin') {
                return redirect()->route('/');
            } elseif ($role === 'customer') {
                return redirect()->route('home');
            } elseif ($role === 'staff') {
                return redirect()->route('sthomeadnmin');
            }
        }

        return back()->withErrors(['login' => 'Login gagal. Periksa kembali username dan password Anda.']);
    }
}
