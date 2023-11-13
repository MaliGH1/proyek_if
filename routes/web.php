<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Auth\LoginController as LoginControl;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
// Route::post('/sewa', 'SewaMobilController@hitung');

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

Route::middleware(['admin'])->group(function () {
    Route::get('/homeadmin', [\App\Http\Controllers\HomeController::class, 'adminHome'])->name('home.admin');
});
    Route::group(['middleware' => ['auth', 'is_admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::resource('cars', \App\Http\Controllers\Admin\CarController::class);
    Route::resource('types', \App\Http\Controllers\Admin\TypeController::class);
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('teams', \App\Http\Controllers\Admin\TeamController::class);
    Route::resource('settings', \App\Http\Controllers\Admin\SettingController::class)->only(['index', 'store', 'update']);
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class)->only(['index', 'destroy']);
    Route::resource('bookings', \App\Http\Controllers\Admin\BookingController::class)->only(['index', 'destroy']);
    Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);
});


require __DIR__ . '/auth.php';
