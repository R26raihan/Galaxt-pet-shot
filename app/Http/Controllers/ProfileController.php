<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login.form')->with('error', 'Silakan login terlebih dahulu.');
        }

        return view('profileuser', compact('user'));
    }
}
