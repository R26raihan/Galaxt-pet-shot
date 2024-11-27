<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan; // Gunakan model Pelanggan
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth; // Import class Auth

class AuthController extends Controller
{
    // Menampilkan halaman register
    public function showRegisterForm()
    {
        if (Auth::check()) {
            return redirect()->route('service'); // Pengguna yang sudah login diarahkan ke service
        }
        return view('register'); // Menampilkan form register jika belum login
    }

    // Menangani proses register
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggan,email',
            'password' => 'required|string|min:8|confirmed',
            'no_telp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'jenis_hewan' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Membuat pelanggan baru
            $pelanggan = Pelanggan::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'jenis_hewan' => $request->jenis_hewan,
            ]);

            // Login pengguna setelah berhasil registrasi
            Auth::login($pelanggan);

            // Redirect ke halaman service setelah berhasil registrasi
            return redirect()->route('service');
        } catch (\Exception $e) {
            // Log error jika terjadi masalah saat menyimpan pelanggan
            Log::error('Error creating customer', ['error' => $e->getMessage()]);

            // Mengembalikan form dengan pesan error
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan, coba lagi.'])->withInput();
        }
    }

    public function showLoginForm()
{
    if (Auth::check()) {
        return redirect()->route('service'); // Pengguna yang sudah login diarahkan ke service
    }
    return view('login'); // Mengarahkan ke view login.blade.php
}


public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        return redirect()->route('service'); // Redirect jika login berhasil
    }

    // Redirect kembali ke form login dengan pesan error
    return redirect()->route('login.form')->withErrors([
        'email' => 'Email atau password salah.',
    ])->withInput();
}




    // Menangani proses logout
    public function logout()
    {
        Auth::logout(); // Melakukan logout
        return redirect()->route('home'); // Redirect ke halaman home setelah logout
    }
}
