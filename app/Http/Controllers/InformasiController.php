<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformasiController extends Controller
{
    public function pengumuman()
    {
        return view("dashboard.kelola-halaman.pengumuman");
    }

    public function berita()
    {
        $berita = Informasi::where("kategori", "berita")->get();
        return view("dashboard.kelola-halaman.berita", compact("berita"));
    }

    public function tambahBerita(Request $request)
    {
        $berita = new Informasi();
        $berita->user_id = Auth::user()->id;
        $berita->judul = $request->judul;
        $berita->kategori = "berita";
        $berita->deskripsi = nl2br($request->deskripsi);
        $berita->gambar = $request->file("file_gambar")->getClientOriginalName();
        $berita->save();

        $request->file("file_gambar")->storeAs("public/informasi", $request->file("file_gambar")->getClientOriginalName());

        return redirect()->back()->with("pesan", "tambah");
    }

    public function ubahBerita(Request $request)
    {
        $berita = Informasi::find($request->id);
        $berita->user_id = Auth::user()->id;
        $berita->judul = $request->judul;
        $berita->kategori = "berita";
        $berita->deskripsi = nl2br($request->deskripsi);
        if ($request->file("file_gambar")) {
            $berita->gambar = $request->file("file_gambar")->getClientOriginalName();
            $request->file("file_gambar")->storeAs("public/informasi", $request->file("file_gambar")->getClientOriginalName());
        }
        $berita->save();

        return redirect()->back()->with("pesan", "ubah");
    }

    public function hapusBerita($id)
    {
        $berita = Informasi::find($id);
        $berita->delete();

        return redirect()->back()->with("pesan", "hapus");
    }
}
