<?php

namespace App\Http\Controllers;

use App\Models\KritikDanSaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the home page.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Handle kritik dan saran submission.
     */
    public function storeKritikDanSaran(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required|string|max:100',
            'email' => 'nullable|email|max:100',
            'pesan' => 'required|string',
        ]);

        KritikDanSaran::create($request->all());

        return redirect()->route('home')->with('success', 'Kritik dan saran berhasil dikirim!');
    }

}
