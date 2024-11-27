<?php

namespace App\Http\Controllers;

use App\Models\ReservasiPenitipan;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    // Menampilkan form reservasi
    public function create()
    {
        return view('reservasipenitipan');
    }

    // Menyimpan data reservasi
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'no_wa' => 'required|string|max:15',
            'jenis_hewan' => 'required|string|max:50',
            'nama_hewan' => 'required|string|max:100',
            'lama_hari' => 'required|integer|min:1',
            'paket' => 'required|string|max:50',
        ]);

        // Menyimpan data reservasi ke database
        ReservasiPenitipan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_wa' => $request->no_wa,
            'jenis_hewan' => $request->jenis_hewan,
            'nama_hewan' => $request->nama_hewan,
            'lama_hari' => $request->lama_hari,
            'paket' => $request->paket,
        ]);

        // Redirect ke halaman sukses atau halaman lain setelah menyimpan
        return redirect()->route('reservasi.create')->with('success', 'Reservasi berhasil dibuat!');
    }

    // Menampilkan form edit untuk reservasi penitipan
    public function edit($id)
    {
        // Menemukan reservasi penitipan berdasarkan ID
        $reservasiPenitipan = ReservasiPenitipan::findOrFail($id);

        // Menampilkan form edit
        return view('edit-reservasi', compact('reservasiPenitipan'));
    }

    // Memperbarui data reservasi penitipan
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
            'no_wa' => 'required|string|max:15',
            'jenis_hewan' => 'required|string|max:50',
            'nama_hewan' => 'required|string|max:100',
            'lama_hari' => 'required|integer|min:1',
            'paket' => 'required|string|max:50',
        ]);

        // Menemukan reservasi penitipan yang akan diperbarui
        $reservasiPenitipan = ReservasiPenitipan::findOrFail($id);

        // Memperbarui data
        $reservasiPenitipan->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_wa' => $request->no_wa,
            'jenis_hewan' => $request->jenis_hewan,
            'nama_hewan' => $request->nama_hewan,
            'lama_hari' => $request->lama_hari,
            'paket' => $request->paket,
        ]);

        // Redirect setelah berhasil memperbarui
        return redirect()->route('admin.dashboard')->with('success', 'Reservasi berhasil diperbarui!');
    }

    // Menghapus data reservasi penitipan
    public function destroy($id)
    {
        // Menemukan reservasi penitipan yang akan dihapus
        $reservasiPenitipan = ReservasiPenitipan::findOrFail($id);

        // Menghapus data
        $reservasiPenitipan->delete();

        // Redirect setelah berhasil menghapus
        return redirect()->route('admin.dashboard')->with('success', 'Reservasi berhasil dihapus!');
    }
}
