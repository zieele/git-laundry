<?php

use App\Http\Controllers\AlgorithmController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\GajiKariyawanController;
use App\Http\Controllers\PenjemputanController;
use App\Http\Middleware\Authenticate;
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

Route::resource('', HomeController::class);
Route::resource('outlet', OutletController::class);
Route::resource('member', MemberController::class);
Route::resource('paket', PaketController::class);
Route::resource('barang', BarangController::class);
Route::resource('penjemputan', PenjemputanController::class);

Route::resource('transaksi', TransaksiController::class);
Route::resource('gaji_karyawan', GajiKariyawanController::class);

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);
// Route::post('logout', [LoginController::class, 'logout']);

// Route::middleware(['auth'])->group(function(){
//     Route::get('',[HomeController::class,'index']);
// });

// Route::group(['prefix' => 'a', 'middleware' => ['isAdmin', 'auth']], function(){
//     Route::get('', [HomeController::class, 'index'])->name('a');
//     Route::resource('outlet', OutletController::class);
//     Route::resource('member', MemberController::class);
//     Route::resource('paket', PaketController::class);
// });

Route::get('outlet/export/xls', [OutletController::class, 'export']);
Route::get('penjemputan/export/xls', [PenjemputanController::class, 'export']);

Route::post('outlet/import/xls', [OutletController::class, 'import']);
Route::post('penjemputan/import/xls', [PenjemputanController::class, 'import']);

Route::get('algorithm', [AlgorithmController::class, 'index']);