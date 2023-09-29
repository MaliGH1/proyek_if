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
    return view('sewa', [
        "title" => "Sewa"
    ]);
});

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
    return view('home');
});

// Route untuk halaman "Tentang Kami" (about us page)
Route::get('/about-us', function () {
    return view('about');
});

// Route untuk halaman "Hubungi Kami" (contact page)
Route::get('/contact', function () {
    return view('contact');
});

// Route untuk mengirimkan formulir kontak
Route::post('/contact', 'ContactController@store')->name('contact.submit');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
