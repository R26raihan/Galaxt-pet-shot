<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLayananGrooming extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'jenis_layanan_grooming';

    // Kolom yang bisa diisi (mass-assignable)
    protected $fillable = [
        'nama_layanan',
        'deskripsi',
    ];

    // Timestamps
    public $timestamps = true;
}
