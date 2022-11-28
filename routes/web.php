<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/home');

// Home Page
Route::get('/home', [HomePageController::class, 'index']);

// Dashboardc 
Route::get('/manajemen-konveksi/dashboard', function () {
    return view('pages.manajemen-konveksi.dashboard.index', ['type_menu' => 'dashboard']);
});

// Pengelolaan Barang
Route::get('/manajemen-konveksi/bahanbaku-masuk', function () {
    return view('pages.manajemen-konveksi.bahan-baku.masuk.index', ['type_menu' => 'bahanbaku']);
});
Route::get('/manajemen-konveksi/bahanbaku-aktual', function () {
    return view('pages.manajemen-konveksi.bahan-baku.aktual.index', ['type_menu' => 'bahanbaku']);
});
Route::get('/manajemen-konveksi/bahanbaku-keluar', function () {
    return view('pages.manajemen-konveksi.bahan-baku.keluar.index', ['type_menu' => 'bahanbaku']);
});