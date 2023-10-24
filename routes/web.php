<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/home', function () {
//     return view('home', [
//         "title" => "Home"
//     ]);
// });

Route::get('/sewa', function () {
    return view('customer/sewa', [
        "title" => "Sewa"
    ]);
});
Route::post('/sewa', function () {
    return view('customer/home', [
        "title" => "Home"
    ]);
});
// Route::post('/sewa', 'SewaMobilController@hitung');

// Rute untuk tombol kembali
Route::get('/back-to-home', function () {
    return redirect('/home');
})->name('back.home');

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About"
//     ]);
// });

// Route::get('/contact', function () {
//     return view('contact', [
//         "title" => "Contact"
//     ]);
// });

// Route untuk halaman beranda (home page)
Route::get('/home', function () {
    return view('customer/home');
});
Route::get('/homeadmin', function () {
    return view('admin/home');
});

Route::get('/homeadmin', function () {
    return view('admin/home');
});

Route::get('/verifikasi', function () {
    return view('admin/verifikasi');
});


// supir
Route::get('/supir', function () {
    return view('supir/homesupir');
});
Route::get('/tambahsupir', function () {
    return view('supir/tambahsupir');
});
Route::get('/hapussupir', function () {
    return view('supir/hapussupir');
});
Route::get('/updatesupir', function () {
    return view('supir/updatesupir');
});
Route::get('/back-to-supir', function () {
    return redirect('/homesupir');
})->name('back.homesupir');

// Mobil
Route::get('/mobil', function () {
    return view('mobil/homemobil');
});
Route::get('/tambahmobil', function () {
    return view('supir/tambahmobil');
});
Route::get('/hapusmobil', function () {
    return view('supir/hapusmobil');
});
Route::get('/updatesupir', function () {
    return view('supir/updatemobil');
});
Route::get('/back-to-mobil', function () {
    return redirect('/homemobil');
})->name('back.homemobil');

// Rute untuk tombol kembali ke home admin
Route::get('/back-to-homeadmin', function () {
    return redirect('/homeadmin');
})->name('back.homeadmin');


//Route::get('verifikasi', \App\Http\Controllers\Admin\VerifikasiController::class);



// Route untuk mengirimkan formulir kontak
Route::post('/contact', 'ContactController@store')->name('contact.submit');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


// Route untuk akses menu Admin
// Auth::routes();

Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin', 'as' => 'admin'], function () {
    Route::resource('cars', \App\Http\Controllers\Admin\CarController::class);
});
