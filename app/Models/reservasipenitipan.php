<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasipenitipan extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang dihubungkan dengan model ini.
     */
    protected $table = 'reservasi_penitipan';

    /**
     * Atribut yang dapat diisi secara massal.
     */
    protected $fillable = [
        'nama',
        'alamat',
        'no_wa',
        'jenis_hewan',
        'nama_hewan',
        'lama_hari',
        'paket',
    ];

    /**
     * Mendefinisikan relasi dengan tabel lainnya (opsional, jika diperlukan).
     * Contoh: Jika ada relasi dengan model `Pelanggan`.
     */
    // public function pelanggan()
    // {
    //     return $this->belongsTo(Pelanggan::class);
    // }
}
