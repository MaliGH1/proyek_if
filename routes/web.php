<?php

use App\Models\Mobil;
use Illuminate\Support\Facades\Auth;


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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController as LoginControl;

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store'])->name('register');
Route::post('/register/add', [App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('register.store');


// Route::get('/login', function () {
//     return view('login');
// });

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

Route::post('/invoice', function () {
    return view('customer/invoice');
})->name('invoice');


// Rute untuk tombol kembali
Route::get('/back-to-home', function () {
    return redirect('/home');
})->name('back.home');


// Route::get('/login', [LoginController::class, 'login']);
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


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/homeadmin', function () {
//     return view('admin/home');
// });

// Route::get('/homeadmin', function () {
//     return view('admin/home');
// });




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
    return redirect('supir/homesupir');
})->name('back.homesupir');

// Mobil
// Routes menggunakan controller tapi belum jadi.
Route::get('/daftarmobil', [MobilController::class, 'index']);

//route tanpa controlerr untuk menampilkan daftar mobil.
Route::get('/wkwk', function () {
    return view('daftarmobil', [
        "title" => "Daftar Mobil",
        "mobil" => Mobil::all()
    ]);
});

//route coba-coba boleh dihapus jika sudah tidak digunakan. 
Route::get('/mobil', function () {
    return view('mobil/homemobil');
});
Route::get('/tambahmobil', function () {
    return view('mobil/tambahmobil');
});
Route::get('/hapusmobil', function () {
    return view('mobil/hapusmobil');
});
Route::get('/updatesupir', function () {
    return view('mobil/updatemobil');
});
Route::get('/back-to-mobil', function () {
    return redirect('mobil/homemobil');
})->name('back.homemobil');
// Rute untuk tombol kembali ke home admin
Route::get('/back-to-homeadmin', function () {
    return redirect('/homeadmin');
})->name('back.homeadmin');





//Route::get('verifikasi', \App\Http\Controllers\Admin\VerifikasiController::class);


// Route::get('/login', 'Auth\LoginController@login')->name('login');
// Route::get('/login', [Auth\LoginController::class, 'login'])->name('login');
// Route untuk mengirimkan formulir kontak
Route::get('/contact', 'ContactController@store')->name('contact.submit');


// Route::group(['middleware' => ['auth', 'checkRole:staff']], function () {
//     Route::get('homeadmin', 'StaffController@dashboard')->name('staff.dashboard');
//     Route::get('/verifikasi', function () {
//         return view('admin/verifikasi');
//     });
// });

Auth::routes();

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/homeadmin', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('home.admin');
});

require __DIR__ . '/auth.php';
