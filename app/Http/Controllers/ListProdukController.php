<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function show()
    {
        $data = Produk::all();

        // Inisialisasi array kosong
        $nama = [];
        $desc = [];
        $harga = [];

        // Isi array
        foreach ($data as $produk) {
            $nama[] = $produk->nama;
            $desc[] = $produk->deskripsi;
            $harga[] = $produk->harga;
        }

        // Kirim ke view
        return view('list_produk', compact('nama', 'desc', 'harga'));
    }
}
