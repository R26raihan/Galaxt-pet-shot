<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showService()
    {
        // Mengembalikan view 'service'
        return view('service');
    }
}