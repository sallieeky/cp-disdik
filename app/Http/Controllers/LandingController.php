<?php

namespace App\Http\Controllers;

use App\Models\ExternalLink;
use App\Models\Informasi;
use App\Models\JenisAnggaran;
use App\Models\JenisRegulasi;
use App\Models\Kontak;
use App\Models\Penghargaan;
use App\Models\Ppid;
use App\Models\Regulasi;
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
        $hero = Umum::whereIn("nama", ["hero", "subtitle"])->get()->pluck("nilai", "nama");
        $layananlainnya = ExternalLink::with("jenis_link")->whereRelation("jenis_link", "nama", "=", "Layanan Lainnya")->get();
        $berita = Informasi::where("kategori", "berita")->orderBy("created_at", "desc")->limit(3)->get();
        $pengumuman = Informasi::where("kategori", "pengumuman")->orderBy("created_at", "desc")->limit(3)->get();
        return view("beranda", compact("hero", "layananlainnya", "berita", "pengumuman"));
    }

    public function tentangKami()
    {
        $profil = Umum::where("nama", "profil")->first();
        $visimisi = Umum::where("nama", "visimisi")->first();
        $strukturorganisasi = Umum::where("nama", "strukturorganisasi")->first();
        $rencanastrategis = RencanaStrategis::all();
        return view("tentang-kami", compact("profil", "visimisi", "strukturorganisasi", "rencanastrategis"));
    }

    public function berita(Request $request)
    {
        $berita = Informasi::where("kategori", "berita")
            ->where("judul", "like", "%$request->cari%")
            ->orderBy("created_at", "desc")
            ->paginate(6);
        $terbaru = Informasi::where("kategori", "berita")->orderBy("created_at", "desc")->take(3)->get();
        return view("berita", compact("berita", "terbaru"));
    }

    public function pengumuman(Request $request)
    {
        $pengumuman = Informasi::where("kategori", "pengumuman")
            ->where("judul", "like", "%$request->cari%")
            ->orderBy("created_at", "desc")
            ->paginate(6);
        $terbaru = Informasi::where("kategori", "pengumuman")->orderBy("created_at", "desc")->take(3)->get();
        return view("pengumuman", compact("pengumuman", "terbaru"));
    }

    public function pojokPintar()
    {
        $pojokPintar = Informasi::where("kategori", "pojok-pintar")->orderBy("created_at", "desc")->paginate(1);
        return view("pojok-pintar", compact("pojokPintar"));
    }

    public function informasiDetail(Informasi $informasi)
    {
        $terbaruBerita = Informasi::where("kategori", "berita")->orderBy("created_at", "desc")->take(3)->get();
        $terbaruPengumuman = Informasi::where("kategori", "pengumuman")->orderBy("created_at", "desc")->take(3)->get();
        return view("informasi-detail", compact("informasi", "terbaruBerita", "terbaruPengumuman"));
    }

    public function regulasi()
    {
        $regulasi = Regulasi::all();
        $jenisRegulasi = JenisRegulasi::all();
        return view("regulasi", compact("regulasi", "jenisRegulasi"));
    }

    public function anggaran()
    {
        $jenisAnggaran = JenisAnggaran::with("anggaran")->get();
        return view("anggaran", compact("jenisAnggaran"));
    }

    public function penghargaan()
    {
        $penghargaan = Penghargaan::all();
        return view("penghargaan", compact("penghargaan"));
    }

    public function ppid()
    {
        $ppid = Ppid::whereIn('nama', ['penjelasan ppid', 'daftar informasi publik', 'alur informasi permohonan publik', 'hak dan tata cara ppid'])->get()->keyBy("nama")->map(function ($item) {
            return $item->isi;
        });
        return view("ppid", compact("ppid"));
    }

    public function kontak()
    {
        // get from Umum where nama = Alamat, Telepon, Email, Instagram, Facebook and nama as key and nilai as value
        $kontak = Umum::whereIn("nama", ["Alamat", "Telepon", "Email", "Instagram", "Facebook"])->get()->keyBy("nama")->map(function ($item) {
            return $item->nilai;
        });
        return view("kontak", compact("kontak"));
    }
}
