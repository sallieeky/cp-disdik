<?php

namespace App\Http\Controllers;

use App\Models\Umum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TentangKamiController extends Controller
{
    public function index()
    {
        $profil = Umum::where("nama", "profil")->first();
        $visimisi = Umum::where("nama", "visimisi")->first();
        $strukturorganisasi = Umum::where("nama", "strukturorganisasi")->first();
        return view("dashboard.kelola-halaman.tentang-kami", compact("profil", "visimisi", "strukturorganisasi"));
    }

    public function editProfil(Request $request)
    {
        $profil = Umum::where("nama", "profil")->first();
        if ($profil == null) {
            $profil = new Umum();
            $profil->nama = "profil";
            $profil->user_id = Auth::user()->id;
        }
        $profil->nilai = $request->profil;
        $profil->save();
        return redirect()->back()->with("pesan", "ubah");
    }

    public function editVisiMisi(Request $request)
    {
        $visi = Umum::where("nama", "visimisi")->first();
        if ($visi == null) {
            $visi = new Umum();
            $visi->nama = "visimisi";
            $visi->user_id = Auth::user()->id;
        }
        $visi->nilai = $request->file("file_visimisi")->getClientOriginalName();
        $visi->save();
        $request->file("file_visimisi")->storeAs("public/visimisitujuan", $request->file("file_visimisi")->getClientOriginalName());
        return redirect()->back()->with("pesan", "ubah");
    }

    public function editStrukturOrganisasi(Request $request)
    {
        $struktur = Umum::where("nama", "strukturorganisasi")->first();
        if ($struktur == null) {
            $struktur = new Umum();
            $struktur->nama = "strukturorganisasi";
            $struktur->user_id = Auth::user()->id;
        }
        $struktur->nilai = $request->file("file_strukturorganisasi")->getClientOriginalName();
        $struktur->save();
        $request->file("file_strukturorganisasi")->storeAs("public/strukturorganisasi", $request->file("file_strukturorganisasi")->getClientOriginalName());
        return redirect()->back()->with("pesan", "ubah");
    }
}
