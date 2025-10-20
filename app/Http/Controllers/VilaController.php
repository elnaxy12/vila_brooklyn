<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VilaController extends Controller
{
    public function beranda()
    {
        // Bisa kirim data ke view nanti, misal daftar vila
        return view('vila.beranda.index');
    }
}
