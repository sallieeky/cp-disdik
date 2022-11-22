<?php

namespace App\Http\Controllers;

use App\Models\ExternalLink;
use App\Models\JenisLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExternalLinkController extends Controller
{
    public function index()
    {
        $data = ExternalLink::all();
        $jenis = JenisLink::all();
        return view("dashboard.external-link", compact("data", "jenis"));
    }

    public function tambah(Request $request)
    {
        $request["gambar"] = $request->file("file_gambar")->getClientOriginalName();
        $request["user_id"] = Auth::user()->id;
        ExternalLink::create($request->all());
        $request->file("file_gambar")->storeAs("public/external-link", $request["gambar"]);
        return back()->with("pesan", "tambah");
    }

    public function ubah(Request $request)
    {
        if ($request->file("file_gambar")) {
            $request["gambar"] = $request->file("file_gambar")->getClientOriginalName();
            $request->file("file_gambar")->storeAs("public/external-link", $request["gambar"]);
        }
        $request["user_id"] = Auth::user()->id;
        ExternalLink::where("id", $request->id)
            ->update([
                "user_id" => $request->user_id,
                "jenis_link_id" => $request->jenis_link_id,
                "gambar" => $request->gambar,
                "url" => $request->url
            ]);
        return back()->with("pesan", "ubah");
    }

    public function hapus(Request $request)
    {
        ExternalLink::find($request->id)->delete();
        return back()->with("pesan", "hapus");
    }
}
