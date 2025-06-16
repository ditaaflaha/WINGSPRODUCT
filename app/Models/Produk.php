<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'tblproduk';

    // Tambahkan ini:
    public $timestamps = false;

    // Izinkan kolom-kolom yang bisa diisi
    protected $fillable = ['nama', 'deskripsi', 'harga'];
    
}
