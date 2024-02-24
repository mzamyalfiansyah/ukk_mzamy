<?php

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\kasircontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\penjualancontroller;
use App\Http\Controllers\customercontroller;


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

Route::middleware(['auth'])->group(function () { 

    Route::get('/dashboard',[kasircontroller::class, 'dashboard']);

    Route::get('/data_produk', [kasircontroller::class, 'data_barang']);

    Route::post('/proses_barang', [kasircontroller::class, 'proses_barang']);

    Route::get('/order', [kasircontroller::class, 'order']);
    Route::get('/kirim_order/{id}', [kasircontroller::class, 'order']);


    Route::get('/proses_delete/{id}', [kasircontroller::class, 'proses_hapus']);

    Route::get('/detail/{id}', [kasircontroller::class, 'detail_produk']);

    Route::post('/proses_update_produk/{id}', [kasircontroller::class, 'proses_update_produk']);

    Route::get('/customer', [kasircontroller::class, 'tampil_customer']);

    Route::post('/proses_customer', [kasircontroller::class, 'proses_customer']);

    Route::get('/masuk_cart/{id}', [kasircontroller::class, 'order']);

    

    Route::get('/penjualan', [kasircontroller::class, 'penjualan']);

    Route::post('/delete_inventory/{id}', [kasircontroller::class, 'delete_inventory']);
    
    Route::post('/keranjang', [kasircontroller::class, 'keranjang']);

    Route::post('/proses_order', [kasircontroller::class, 'proses_order']);

    Route::post('/checkout', [kasircontroller::class, 'checkout']);

    Route::get('/detail_penjualan/{id}', [penjualancontroller::class, 'detail_penjualan']);

    Route::get('/cetak/{id}', [penjualancontroller::class, 'cetak']);



    Route::get('/edit_customer/{id}', [customercontroller::class, 'edit_customer']);

    Route::post('/proses_update_customer/{id}', [customercontroller::class, 'proses_update_customer']);
});



Route::get('/daftar', [logincontroller::class, 'daftar']);

Route::post('/proses_daftar', [logincontroller::class, 'proses_daftar']);

Route::get('/login', [logincontroller::class, 'halaman_login'])->name('login');

Route::post('/proses_login', [logincontroller::class, 'proses_login']);

Route::get('/logout', [logincontroller::class, 'proseslogout']);

