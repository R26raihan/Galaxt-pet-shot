<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hargagrooming extends Model
{
    use HasFactory;

    protected $table = 'harga_grooming'; // Nama tabel
    protected $fillable = ['jenis_hewan', 'ukuran_hewan', 'harga', 'promo']; // Kolom yang dapat diisi
}
