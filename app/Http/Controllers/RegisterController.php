<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nama' => 'required|max:255',
    //         'username' => ['required', 'min:3', 'max:255', 'unique:customers'],
    //         'alamat' => 'required',
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
    //         'nohp' => ['required', 'string', 'max:13', 'unique:customers'],
    //         'password' => 'required|min:5|max:255',
    //     ]);

    //     $validator = $request->validate([
    //         'username' => ['required', 'min:3', 'max:255', 'unique:users'],
    //         'password' => 'required|min:5|max:255',
    //     ]);
    //     // Jika password tidak terlihat didatabase
    //     // $validatedData['password'] = bcrypt(@$validatedData['password']);
    //     // $validatedData['password]'] = Hash::make($validatedData['password']);

    //     // dd('registrasi berhasil');
    //     Customer::create($validatedData);
    //     $user = User::create($validatedData);
    //     // Jika Anda ingin menyimpan data dalam model User yang berbeda
    //     $user->user()->create([$validator]);
    // }

    // public function register(Request $request)
    // {
    //     // Validasi input

    //      Customer::create([
    //          'nama' => $request->input('nama'),
    //          'username' => $request->input('username'),
    //          'alamat' => $request->input('alamat'),
    //          'email' => $request->input('email'),
    //          'nohp' => $request->input('nohp'),
    //          'password' => Hash::make($request->input('password')),
    //      ]);

    //      User::create([
    //          'username' => $request->input('username'),
    //          'password' => $request->input('password'),
    //      ]);

    //      return redirect('/login')->with('success', 'Akun Anda telah dibuat. Silakan masuk.');
    // }

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:customers'],
            'alamat' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'nohp' => ['required', 'string', 'max:13', 'unique:customers'],
            'password' => 'required|min:5|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        customers::create([
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email'),
            'nohp' => $request->input('nohp'),
            'password' => Hash::make($request->input('password')),
        ]);
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
    }
}