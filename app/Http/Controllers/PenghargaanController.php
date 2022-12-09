<?php

namespace App\Http\Controllers;

use App\Models\Penghargaan;
use Illuminate\Http\Request;

class PenghargaanController extends Controller
{
    public function index()
    {
        $penghargaan = Penghargaan::all();
        return view("dashboard.kelola-halaman.penghargaan", compact("penghargaan"));
    }

    public function tambahPenghargaan(Request $request)
    {
        Penghargaan::create([
            "nama" => $request->nama,
            "gambar" => $request->file("file_gambar")->getClientOriginalName()
        ]);
        $request->file("file_gambar")->storeAs("public/penghargaan", $request->file("file_gambar")->getClientOriginalName());
        return back()->with("pesan", "tambah");
    }

    public function ubahPenghargaan(Request $request)
    {
        $penghargaan = Penghargaan::find($request->id);
        // cek apakah ada file yang diupload
        if ($request->file("file_gambar") != null) {
            $penghargaan->update([
                "nama" => $request->nama,
                "gambar" => $request->file("file_gambar")->getClientOriginalName()
            ]);
            $request->file("file_gambar")->storeAs("public/penghargaan", $request->file("file_gambar")->getClientOriginalName());
        } else {
            $penghargaan->update([
                "nama" => $request->nama,
            ]);
        }
        return back()->with("pesan", "ubah");
    }

    public function hapusPenghargaan(Request $request)
    {
        Penghargaan::destroy($request->id);
        return back()->with("pesan", "hapus");
    }
}
