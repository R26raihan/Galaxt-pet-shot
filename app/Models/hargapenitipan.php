<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hargapenitipan extends Model
{
    use HasFactory;

    protected $table = 'harga_penitipan'; // Nama tabel
    protected $fillable = ['jenis_hewan', 'harian', 'mingguan', 'bulanan', 'paketan', 'promo']; // Kolom yang dapat diisi
}
