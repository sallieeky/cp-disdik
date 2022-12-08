<?php

namespace App\Http\Controllers;

use App\Models\ExternalLink;
use App\Models\RencanaStrategis;
use App\Models\Slider;
use App\Models\Umum;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function beranda()
    {
        Umum::create([
            "user_id" => 1,
            "nama" => "pengunjung",
            "nilai" => 1
        ]);
        $slider = Slider::all();
        $layananlainnya = ExternalLink::with("jenis_link")->whereRelation("jenis_link", "nama", "=", "Layanan Lainnya")->get();
        return view("beranda", compact("slider", "layananlainnya"));
    }

    public function profil()
    {
        return view("profil");
    }

    public function tentangKami()
    {
        $profil = Umum::where("nama", "profil")->first();
        $visimisi = Umum::where("nama", "visimisi")->first();
        $strukturorganisasi = Umum::where("nama", "strukturorganisasi")->first();
        $rencanastrategis = RencanaStrategis::all();
        return view("tentang-kami", compact("profil", "visimisi", "strukturorganisasi", "rencanastrategis"));
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
