<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

// Menampilkan daftar produk
Route::get('/listproduk', [ListProdukController::class, 'show'])->name('produk.list');

// Menyimpan data produk (form POST)
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');


// Halaman awal Laravel (default)
Route::get('/', function () {
    return view('welcome');
});
