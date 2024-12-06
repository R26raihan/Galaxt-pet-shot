<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kritikdansaran extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika sesuai konvensi)
    protected $table = 'kritik_dan_saran';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = ['nama_pengguna', 'email', 'pesan'];
}
