<?php

namespace App\Http\Controllers;

use App\Models\hargagrooming;
use App\Models\hargapenitipan;
use App\Models\pelanggan;
use App\Models\reservasigrooming;
use App\Models\reservasipenitipan;
use Illuminate\Http\Request;
use App\Models\JenisLayananGrooming;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel yang ada
        $hargagrooming = HargaGrooming::all();
        $hargapenitipan = HargaPenitipan::all();
        $pelanggan = Pelanggan::all();
        $reservasigrooming = ReservasiGrooming::all();
        $reservasipenitipan = ReservasiPenitipan::all();

        $jenisLayananGrooming = JenisLayananGrooming::all();  // Mengambil seluruh data layanan grooming

        // Kirimkan semua data ke view admin
        return view('admin', compact(
            'hargagrooming',
            'hargapenitipan',
            'pelanggan',
            'reservasigrooming',
            'reservasipenitipan',
            'jenisLayananGrooming' // Pastikan variabel ini dikirim ke view
        ));
    }

    // Menampilkan form edit untuk reservasigrooming
    public function edit($id)
    {
        $reservasigrooming = reservasigrooming::findOrFail($id);
        return view('edit_reservasigrooming', compact('reservasigrooming'));
    }

    // Menyimpan perubahan data reservasigrooming
    public function update(Request $request, $id)
    {
        $reservasigrooming = reservasigrooming::findOrFail($id);

        // Validasi dan update data sesuai request
        $reservasigrooming->update($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Data updated successfully');
    }

    // Menghapus data reservasigrooming
    public function destroy($id)
    {
        $reservasigrooming = reservasigrooming::findOrFail($id);
        $reservasigrooming->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data deleted successfully');
    }

    // Menampilkan form edit untuk reservasipenitipan
    public function editPenitipan($id)
    {
        $reservasipenitipan = reservasipenitipan::findOrFail($id);
        return view('edit_reservasipenitipan', compact('reservasipenitipan'));
    }

    // Menyimpan perubahan data reservasipenitipan
    public function updatePenitipan(Request $request, $id)
    {
        $reservasipenitipan = reservasipenitipan::findOrFail($id);

        // Validasi dan update data sesuai request
        $reservasipenitipan->update($request->all());

        return redirect()->route('admin.dashboard')->with('success', 'Data updated successfully');
    }

    // Menghapus data reservasipenitipan
    public function destroyPenitipan($id)
    {
        $reservasipenitipan = reservasipenitipan::findOrFail($id);
        $reservasipenitipan->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Data deleted successfully');
    }









// ==============================================================================


    public function destroyJenisLayananGrooming($id)
{
    // Temukan jenis layanan grooming berdasarkan ID
    $jenisLayananGrooming = JenisLayananGrooming::findOrFail($id);

    // Hapus data
    $jenisLayananGrooming->delete();

    // Kembalikan ke halaman sebelumnya dengan pesan sukses
    return redirect()->route('admin.dashboard')->with('success', 'Jenis Layanan Grooming berhasil dihapus');
}

public function editJenisLayananGrooming($id)
{
    // Cari data jenis layanan grooming berdasarkan ID
    $jenisLayananGrooming = JenisLayananGrooming::findOrFail($id);

    // Kirimkan data ke view edit
    return view('edit_jenis_layanan', compact('jenisLayananGrooming'));
}



public function updateJenisLayananGrooming(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'nama_layanan' => 'required|string|max:255',
        'deskripsi' => 'required|string|max:1000',
    ]);

    // Cari data jenis layanan grooming berdasarkan ID
    $jenisLayananGrooming = JenisLayananGrooming::findOrFail($id);

    // Update data
    $jenisLayananGrooming->update([
        'nama_layanan' => $request->nama_layanan,
        'deskripsi' => $request->deskripsi,
    ]);

    // Redirect kembali ke halaman dashboard dengan pesan sukses
    return redirect()->route('admin.dashboard')->with('success', 'Jenis Layanan Grooming berhasil diperbarui');
}

// Controller: JenisLayananController.php

public function create()
{
    return view('create_jenis_layanan');
}
// Controller: JenisLayananController.php

public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama_layanan' => 'required|string|max:255',
        'deskripsi' => 'required|string|max:500',
    ]);

    // Menyimpan data ke dalam database
    JenisLayananGrooming::create([
        'nama_layanan' => $request->nama_layanan,
        'deskripsi' => $request->deskripsi,
    ]);

    // Mengarahkan kembali dengan pesan sukses
    return redirect()->route('admin.dashboard')->with('success', 'Jenis Layanan berhasil ditambahkan');
}

// ==================================================================================================

}
