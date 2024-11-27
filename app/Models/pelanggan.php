<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class pelanggan extends Authenticatable
{
    use Notifiable;

    protected $table = 'pelanggan';

    protected $fillable = [
        'name', 'email', 'password', 'no_telp', 'alamat', 'jenis_hewan',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
