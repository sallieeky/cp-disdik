<?php

namespace App\Http\Controllers;

use App\Models\RiwayatProfil;
use App\Models\Umum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $data = RiwayatProfil::all();
        return view("dashboard.kelola-halaman.profil", compact("data"));
    }

    public function deskripsiUbah(Request $request)
    {
        $cek = Umum::where("nama", "deskripsi")->first();
        if ($cek) {
            $cek->update([
                "nilai" => $request->nilai
            ]);
        } else {
            Umum::create([
                "nama" => "deskripsi",
                "nilai" => ""
            ]);
        }
        return back()->with("pesan", "ubah");
    }

    public function riwayatProfilTambah(Request $request)
    {
        $request["user_id"] = Auth::user()->id;
        $request["file"] = $request->file("file_file")->getClientOriginalName();
        $request["size"] = $request->file("file_file")->getSize();
        $request->file("file_file")->storeAs("public/riwayat-profil", $request->file);
        RiwayatProfil::create($request->all());
        return back()->with("pesan", "tambah");
    }
    public function riwayatProfilUbah(Request $request)
    {
        if ($request->file("file_file")) {
            $request["file"] = $request->file("file_file")->getClientOriginalName();
            $request["size"] = $request->file("file_file")->getSize();
            $request->file("file_file")->storeAs("public/riwayat-profil", $request->file);
        }
        RiwayatProfil::find($request->id)->update($request->all());
        return back()->with("pesan", "ubah");
    }
    public function riwayatProfilHapus(Request $request)
    {
        RiwayatProfil::find($request->id)->delete();
        return back()->with("pesan", "hapus");
    }
}
