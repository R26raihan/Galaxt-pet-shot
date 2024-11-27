<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasigrooming extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini (optional, jika tidak sesuai dengan nama konvensional)
    protected $table = 'reservasi_grooming';

    // Kolom-kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama',
        'alamat',
        'no_wa',
        'jenis_hewan',
        'nama_hewan',
        'jenis_layanan',
        'tanggal_layanan',
        'harga'
    ];

    // Kolom yang harus diisi otomatis oleh Eloquent (timestamps)
    public $timestamps = true;
}
