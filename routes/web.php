<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kasircontroller;
use App\Http\Controllers\logincontroller;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard',[kasircontroller::class, 'dashboard']);

Route::get('/data_produk', [kasircontroller::class, 'data_barang']);





Route::get('/login', [logincontroller::class, 'halaman_login'])->name('login');

Route::post('/proses_login', [logincontroller::class, 'proses_login']);

