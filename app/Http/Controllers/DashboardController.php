<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use App\Models\Informasi;
use App\Models\Umum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $halaman = Halaman::all();
        $pengunjung = Umum::where("nama", "pengunjung")->get()->count();
        $informasi = Informasi::all()->count();
        return view("dashboard.beranda", compact("halaman", "pengunjung", "informasi"));
    }
    public function umum()
    {
        $hero = Umum::whereIn("nama", ["hero", "subtitle"])->get()->pluck("nilai", "nama");
        $icon = Umum::where("nama", "icon")->first()->nilai;
        return view("dashboard.umum", compact("hero", "icon"));
    }
    public function iconUbah(Request $request)
    {
        $request["gambar"] = $request->file("file_gambar")->getClientOriginalName();
        $data = Umum::where("nama", "icon")->get();
        if ($data) {
            Umum::where("nama", "icon")->update([
                "nilai" => $request->gambar,
                "user_id" => Auth::user()->id
            ]);
        }
        $request->file("file_gambar")->storeAs("public/icon", $request["gambar"]);
        return back()->with("pesan", "ubah");
    }
    public function heroUbah(Request $request)
    {
        // cek apakah ada file_gambar
        if ($request->file("file_gambar")) {
            $request["gambar"] = $request->file("file_gambar")->getClientOriginalName();
            $data = Umum::where("nama", "hero")->get();
            if ($data) {
                Umum::where("nama", "hero")->update([
                    "nilai" => $request->gambar,
                    "user_id" => Auth::user()->id
                ]);
            } else {
                Umum::create([
                    "nama" => "hero",
                    "nilai" => $request->gambar,
                    "user_id" => Auth::user()->id
                ]);
            }
            $request->file("file_gambar")->storeAs("public/hero", $request["gambar"]);
        }
        $data = Umum::where("nama", "subtitle")->get();
        if ($data) {
            Umum::where("nama", "subtitle")->update([
                "nilai" => $request->subtitle,
                "user_id" => Auth::user()->id
            ]);
        } else {
            Umum::create([
                "nama" => "subtitle",
                "nilai" => $request->subtitle,
                "user_id" => Auth::user()->id
            ]);
        }
        return back()->with("pesan", "ubah");
    }

    public function kontak()
    {
        $kontak = Umum::whereIn("nama", ["alamat", "telepon", "email", "instagram", "facebook"])->get()->pluck("nilai", "nama");
        return view("dashboard.kontak", compact("kontak"));
    }

    public function kontakUbah(Request $request)
    {
        // cek apakah ada Alamat, Telepon, Email, Instagram, Facebook
        $data = Umum::whereIn("nama", ["Alamat", "Telepon", "Email", "Instagram", "Facebook"])->get();
        if ($data) {
            try {
                Umum::where("nama", "Alamat")->update([
                    "nilai" => $request->alamat,
                    "user_id" => Auth::user()->id
                ]);
                Umum::where("nama", "Telepon")->update([
                    "nilai" => $request->telepon,
                    "user_id" => Auth::user()->id
                ]);
                Umum::where("nama", "Email")->update([
                    "nilai" => $request->email,
                    "user_id" => Auth::user()->id
                ]);
                Umum::where("nama", "Instagram")->update([
                    "nilai" => $request->instagram,
                    "user_id" => Auth::user()->id
                ]);
                Umum::where("nama", "Facebook")->update([
                    "nilai" => $request->facebook,
                    "user_id" => Auth::user()->id
                ]);
            } catch (\Throwable $th) {
                // 
            }
        } else {
            Umum::create([
                "nama" => "Alamat",
                "nilai" => $request->alamat,
                "user_id" => Auth::user()->id
            ]);
            Umum::create([
                "nama" => "Telepon",
                "nilai" => $request->telepon,
                "user_id" => Auth::user()->id
            ]);
            Umum::create([
                "nama" => "Email",
                "nilai" => $request->email,
                "user_id" => Auth::user()->id
            ]);
            Umum::create([
                "nama" => "Instagram",
                "nilai" => $request->instagram,
                "user_id" => Auth::user()->id
            ]);
            Umum::create([
                "nama" => "Facebook",
                "nilai" => $request->facebook,
                "user_id" => Auth::user()->id
            ]);
        }
        return back()->with("pesan", "ubah");
    }

    public function login()
    {
        return view("dashboard.login");
    }
    public function loginPost(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect("/dashboard");
        } else {
            return back()->with("pesan", "Username atau password salah");
        }
    }

    public function kelolaHalaman()
    {
        $data = Halaman::all();
        return view("dashboard.kelola-halaman", compact("data"));
    }

    public function kelolaHalamanDetail(Halaman $halaman)
    {
        return view("dashboard.kelola-halaman-detail", compact("halaman"));
    }
}
