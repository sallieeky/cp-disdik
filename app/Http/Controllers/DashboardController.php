<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use App\Models\Umum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.beranda");
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
    // public function sliderTambah(Request $request)
    // {
    //     $request["gambar"] = $request->file("file_gambar")->getClientOriginalName();
    //     $request["user_id"] = Auth::user()->id;
    //     Slider::create($request->all());
    //     $request->file("file_gambar")->storeAs("public/hero", $request["gambar"]);
    //     return back()->with("pesan", "tambah");
    // }
    // public function sliderUbah(Request $request)
    // {
    //     if ($request->file("file_gambar")) {
    //         $request["gambar"] = $request->file("file_gambar")->getClientOriginalName();
    //         $request->file("file_gambar")->storeAs("public/hero", $request["gambar"]);
    //     }
    //     $request["user_id"] = Auth::user()->id;
    //     Slider::where("id", $request->id)
    //         ->update([
    //             "user_id" => $request->user_id,
    //             "gambar" => $request->gambar,
    //             "judul" => $request->judul
    //         ]);
    //     return back()->with("pesan", "ubah");
    // }
    // public function sliderHapus(Request $request)
    // {
    //     Slider::find($request->id)->delete();
    //     return back()->with("pesan", "hapus");
    // }

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
