<?php

namespace App\Http\Controllers;

use App\Models\HargaPenitipan;
use Illuminate\Http\Request;

class HargaPenitipanController extends Controller
{
    // Menampilkan semua data harga penitipan
    public function index()
    {
        $hargaPenitipan = HargaPenitipan::all();
        return view('admin.harga-grooming.harga-penitipan.index', compact('hargaPenitipan'));
    }

    // Menampilkan form untuk membuat harga penitipan baru
    public function create()
    {
        return view('admin.harga-grooming.harga-penitipan.create');
    }

    // Menyimpan harga penitipan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'jenis_hewan' => 'required|string|max:50',
            'harian' => 'nullable|numeric|min:0',
            'mingguan' => 'nullable|numeric|min:0',
            'bulanan' => 'nullable|numeric|min:0',
            'paketan' => 'nullable|numeric|min:0',
            'promo' => 'nullable|string|max:100',
        ]);

        // Simpan data harga penitipan
        $hargaPenitipan = new HargaPenitipan();
        $hargaPenitipan->jenis_hewan = $request->jenis_hewan;
        $hargaPenitipan->harian = $request->harian;
        $hargaPenitipan->mingguan = $request->mingguan;
        $hargaPenitipan->bulanan = $request->bulanan;
        $hargaPenitipan->paketan = $request->paketan;
        $hargaPenitipan->promo = $request->promo;
        $hargaPenitipan->save();

        return redirect()->route('admin.harga-penitipan.index')->with('success', 'Harga Penitipan berhasil disimpan!');
    }

    // Menampilkan form untuk mengedit harga penitipan
    public function edit($id)
    {
        $hargaPenitipan = HargaPenitipan::findOrFail($id);
        return view('admin.harga-grooming.harga-penitipan.edit', compact('hargaPenitipan'));
    }

    // Memperbarui harga penitipan di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_hewan' => 'required|string|max:50',
            'harian' => 'nullable|numeric|min:0',
            'mingguan' => 'nullable|numeric|min:0',
            'bulanan' => 'nullable|numeric|min:0',
            'paketan' => 'nullable|numeric|min:0',
            'promo' => 'nullable|string|max:100',
        ]);

        // Temukan dan perbarui harga penitipan
        $hargaPenitipan = HargaPenitipan::findOrFail($id);
        $hargaPenitipan->jenis_hewan = $request->jenis_hewan;
        $hargaPenitipan->harian = $request->harian;
        $hargaPenitipan->mingguan = $request->mingguan;
        $hargaPenitipan->bulanan = $request->bulanan;
        $hargaPenitipan->paketan = $request->paketan;
        $hargaPenitipan->promo = $request->promo;
        $hargaPenitipan->save();

        return redirect()->route('admin.harga-penitipan.index')->with('success', 'Harga Penitipan berhasil diperbarui!');
    }

    // Menghapus harga penitipan dari database
    public function destroy($id)
    {
        $hargaPenitipan = HargaPenitipan::findOrFail($id);
        $hargaPenitipan->delete();

        return redirect()->route('admin.harga-penitipan.index')->with('success', 'Harga Penitipan berhasil dihapus!');
    }
}
