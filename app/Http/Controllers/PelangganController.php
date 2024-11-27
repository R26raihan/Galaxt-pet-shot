<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan; // Pastikan model Pelanggan sudah ada

class PelangganController extends Controller
{
    // Menampilkan halaman form untuk membuat pelanggan baru
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    // Menyimpan pelanggan baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggans,email',
            'telepon' => 'required|string|max:15',
            'alamat' => 'nullable|string|max:255',
        ]);

        // Simpan data pelanggan baru
        $pelanggan = new Pelanggan();
        $pelanggan->nama = $request->nama;
        $pelanggan->email = $request->email;
        $pelanggan->telepon = $request->telepon;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->save();

        return redirect()->route('admin.pelanggan.create')->with('success', 'Pelanggan berhasil disimpan!');
    }

    // Menampilkan daftar pelanggan
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('admin.pelanggan.index', compact('pelanggans'));
    }

    // Menampilkan halaman edit untuk pelanggan tertentu
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    // Memperbarui data pelanggan di database
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggans,email,' . $id,
            'telepon' => 'required|string|max:15',
            'alamat' => 'nullable|string|max:255',
        ]);

        // Temukan dan perbarui data pelanggan
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->nama = $request->nama;
        $pelanggan->email = $request->email;
        $pelanggan->telepon = $request->telepon;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->save();

        return redirect()->route('admin.pelanggan.edit', $id)->with('success', 'Pelanggan berhasil diperbarui!');
    }

    // Menghapus pelanggan dari database
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('admin.pelanggan.index')->with('success', 'Pelanggan berhasil dihapus!');
    }
}
