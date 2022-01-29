<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\TbMemberController;
use App\Http\Controllers\TbOutletController;
use App\Http\Controllers\TbPaketController;
use App\Http\Controllers\TbTransaksiController;
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

Route::resource('/', Controller::class);
Route::resource('/outlet', TbOutletController::class);
Route::resource('/member', TbMemberController::class);
Route::resource('/paket', TbPaketController::class);
Route::resource('/transaksi', TbTransaksiController::class);
