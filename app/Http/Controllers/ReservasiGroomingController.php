<?php

namespace App\Http\Controllers;

use App\Models\ReservasiGrooming;
use Illuminate\Http\Request;
use App\Models\HargaGrooming;
use App\Models\JenisLayananGrooming;

class ReservasiGroomingController extends Controller
{
    public function create()
    {
        // Ambil semua data harga dari tabel harga_grooming
        $hargaGrooming = HargaGrooming::all();  // Mengambil semua data harga grooming

        // Ambil semua jenis layanan dari tabel jenis_layanan_grooming
        $jenisLayanan = \App\Models\JenisLayananGrooming::all();  // Mengambil semua jenis layanan grooming

        // Kirimkan data harga grooming dan jenis layanan grooming ke view
        return view('reservasigrooming', compact('hargaGrooming', 'jenisLayanan'));
    }


    // Menyimpan data reservasi grooming
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'no_wa' => 'required|string|max:15',
            'jenis_hewan' => 'required|string|max:50',
            'nama_hewan' => 'required|string|max:100',
            'jenis_layanan' => 'required|string|max:100',  // Sesuaikan dengan kolom jenis layanan
            'tanggal_layanan' => 'required|date',  // Validasi untuk tanggal layanan
            'harga' => 'required|numeric|min:0',  // Validasi harga, harus angka
        ]);

        // Menyimpan data reservasi grooming ke database
        ReservasiGrooming::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_wa' => $request->no_wa,
            'jenis_hewan' => $request->jenis_hewan,
            'nama_hewan' => $request->nama_hewan,
            'jenis_layanan' => $request->jenis_layanan,
            'tanggal_layanan' => $request->tanggal_layanan,
            'harga' => $request->harga,
        ]);

        // Redirect ke halaman sukses atau halaman lain setelah menyimpan
        return redirect()->route('reservasi.grooming.create')->with('success', 'Reservasi grooming berhasil dibuat!');
    }

    // Menampilkan form edit untuk reservasi grooming
    public function edit($id)
    {
        // Menemukan reservasi grooming berdasarkan ID
        $reservasiGrooming = ReservasiGrooming::findOrFail($id);

        // Menampilkan form edit
        return view('edit-reservasi-grooming', compact('reservasiGrooming'));
    }

    // Memperbarui data reservasi grooming
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'no_wa' => 'required|string|max:15',
            'jenis_hewan' => 'required|string|max:50',
            'nama_hewan' => 'required|string|max:100',
            'jenis_layanan' => 'required|string|max:100',  // Sesuaikan dengan kolom jenis layanan
            'tanggal_layanan' => 'required|date',  // Validasi untuk tanggal layanan
            'harga' => 'required|numeric|min:0',  // Validasi harga, harus angka
        ]);

        // Menemukan reservasi grooming yang akan diperbarui
        $reservasiGrooming = ReservasiGrooming::findOrFail($id);

        // Memperbarui data
        $reservasiGrooming->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_wa' => $request->no_wa,
            'jenis_hewan' => $request->jenis_hewan,
            'nama_hewan' => $request->nama_hewan,
            'jenis_layanan' => $request->jenis_layanan,
            'tanggal_layanan' => $request->tanggal_layanan,
            'harga' => $request->harga,
        ]);

        // Redirect setelah berhasil memperbarui
        return redirect()->route('admin.dashboard')->with('success', 'Reservasi grooming berhasil diperbarui!');
    }

    // Menghapus data reservasi grooming
    public function destroy($id)
    {
        // Menemukan reservasi grooming yang akan dihapus
        $reservasiGrooming = ReservasiGrooming::findOrFail($id);

        // Menghapus data
        $reservasiGrooming->delete();

        // Redirect setelah berhasil menghapus
        return redirect()->route('admin.dashboard')->with('success', 'Reservasi grooming berhasil dihapus!');
    }
}

