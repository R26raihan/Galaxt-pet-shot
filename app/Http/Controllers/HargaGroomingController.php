<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HargaGrooming;
use App\Models\ReservasiGrooming;

class HargaGroomingController extends Controller
{
    // Menampilkan daftar harga grooming
    public function tampilkanDaftarHargaGrooming()
    {
        $hargaGrooming = HargaGrooming::all();  // Mengambil semua data harga grooming
        return view('admin.harga-grooming.index', compact('hargaGrooming'));  // Mengirimkan data ke view
    }

    // Menampilkan form tambah harga grooming
    public function tampilkanFormTambahHargaGrooming()
    {
        return view('admin.harga-grooming.create');
    }

    // Menyimpan harga grooming baru
    public function simpanHargaGrooming(Request $request)
    {
        $request->validate([
            'jenis_hewan' => 'required|string|max:50',
            'ukuran_hewan' => 'required|in:Kecil,Sedang,Besar',
            'harga' => 'required|numeric|min:0',
            'promo' => 'nullable|string|max:100',
        ]);

        HargaGrooming::create($request->only('jenis_hewan', 'ukuran_hewan', 'harga', 'promo'));

        return redirect()->route('admin.harga-grooming.index')->with('success', 'Harga Grooming berhasil disimpan!');
    }

    // Menampilkan form edit harga grooming
    public function tampilkanFormEditHargaGrooming($id)
    {
        $hargaGrooming = HargaGrooming::findOrFail($id);
        return view('admin.harga-grooming.edit', compact('hargaGrooming'));
    }

    // Memperbarui harga grooming
    public function perbaruiHargaGrooming(Request $request, $id)
    {
        $request->validate([
            'jenis_hewan' => 'required|string|max:50',
            'ukuran_hewan' => 'required|in:Kecil,Sedang,Besar',
            'harga' => 'required|numeric|min:0',
            'promo' => 'nullable|string|max:100',
        ]);

        $hargaGrooming = HargaGrooming::findOrFail($id);
        $hargaGrooming->update($request->only('jenis_hewan', 'ukuran_hewan', 'harga', 'promo'));

        return redirect()->route('admin.harga-grooming.index')->with('success', 'Harga Grooming berhasil diperbarui!');
    }

    // Menghapus harga grooming
    public function hapusHargaGrooming($id)
    {
        $hargaGrooming = HargaGrooming::findOrFail($id);
        $hargaGrooming->delete();

        return redirect()->route('admin.harga-grooming.index')->with('success', 'Harga Grooming berhasil dihapus!');
    }

}
