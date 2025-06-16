<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

// Menampilkan daftar produk
Route::get('/listproduk', [ListProdukController::class, 'show'])->name('produk.list');

// Menyimpan data produk (form POST)
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');

// Menghapus
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');

// Mengedit (menampilkan form edit)
Route::get('/produk/{id}/edit', [ListProdukController::class, 'edit'])->name('produk.edit');

// Menyimpan hasil update
Route::put('/produk/{id}', [ListProdukController::class, 'update'])->name('produk.update');

// Halaman awal Laravel (default)
Route::get('/', function () {
    return view('welcome');
});
