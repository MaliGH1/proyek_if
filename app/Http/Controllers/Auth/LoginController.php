<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('homeadmin')->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    // protected function authenticated(Request $request, $user)
    // {
    //     if ($user->isAdmin) {
    //         // Pengguna adalah admin, alihkan ke halaman admin
    //         return redirect('/homeadmin');
    //     } else {
    //         // Pengguna bukan admin, alihkan ke halaman pengguna biasa
    //         return redirect('/home');
    //     }
    // }

    public function showLoginForm()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }   
    // public function login(Request $request)
    // {
    //     $this->validate($request, [
    //         $this->username() => 'required',
    //         'password' => 'required',
    //     ]);

    //     if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
    //         // Pengguna berhasil masuk. Sekarang kita akan memeriksa perannya.
    //         $user = Auth::user();
    //         $role = $user->role;

    //         if ($role === 'admin') {
    //             return redirect()->route('/');
    //         } elseif ($role === 'customer') {
    //             return redirect()->route('home');
    //         } elseif ($role === 'staff') {
    //             return redirect()->route('homeadnmin');
    //         }
    //     }

    //     return back()->withErrors(['login' => 'Login gagal. Periksa kembali username dan password Anda.']);
    // }
    
}
