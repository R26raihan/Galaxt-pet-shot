<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Menampilkan daftar pengguna (pelanggan) di halaman.
     */
    public function showUsers()
    {
        // Ambil semua data pengguna dari tabel pelanggan
        $users = pelanggan::all();

        // Kirim data pengguna ke view 'user_list'
        return view('user', compact('users'));
    }
}
