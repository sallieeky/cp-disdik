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

    public function tugasFungsi()
    {
        return view('tugas-dan-fungsi');
    }

    public function berita()
    {
        return view("berita");
    }
    public function beritaDetail($id)
    {
        return view("berita-detail");
    }

    public function pengumuman()
    {
        return view("pengumuman");
    }
    public function pengumumanDetail($id)
    {
        return view("pengumuman-detail");
    }

    public function regulasi()
    {
        return view("regulasi");
    }

    public function ppid()
    {
        return view("penjelasan-ppid");
    }

    public function penghargaan()
    {
        return view("penghargaan");
    }
}
