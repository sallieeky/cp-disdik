<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function informasi()
    {
        return view("dashboard.kelola-halaman.informasi");
    }

    public function berita()
    {
        return view("dashboard.kelola-halaman.berita");
    }
}
