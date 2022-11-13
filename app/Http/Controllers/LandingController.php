<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function beranda()
    {
        return view("beranda");
    }

    public function profil()
    {
        return view("profil");
    }

    public function visiMisi()
    {
        return view("visi-misi-tujuan");
    }

    public function strukturOrganisasi()
    {
        return view('struktur-organisasi');
    }
}
