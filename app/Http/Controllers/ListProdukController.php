<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    // Menampilkan daftar produk
    public function show()
    {
        $produk = Produk::all(); // ambil semua data produk
        return view('list_produk', compact('produk'));
    }

    // Menyimpan data produk baru
    public function simpan(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0',
        ]);

        // Simpan ke tabel tblproduk
        Produk::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        // Kembali ke halaman list produk
        return redirect()->route('produk.list')->with('success', 'Produk berhasil ditambahkan!');
    }
}
