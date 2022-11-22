<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function profil()
    {
        return view("dashboard.kelola-halaman.profil");
    }
    public function visiMisiDanTujuan()
    {
        return view("dashboard.kelola-halaman.visi-misi-tujuan");
    }
    public function strukturOrganisasi()
    {
        return view("dashboard.kelola-halaman.struktur-organisasi");
    }
    public function rencanaStrategis()
    {
        return view("dashboard.kelola-halaman.rencana-strategis");
    }
    public function tugasDanFungsi()
    {
        return view("dashboard.kelola-halaman.tugas-fungsi");
    }
}
