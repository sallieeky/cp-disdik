<?php

namespace App\Http\Controllers;

use App\Models\JenisRegulasi;
use App\Models\Regulasi;
use Illuminate\Http\Request;

class RegulasiController extends Controller
{
    public function index()
    {
        $regulasi = Regulasi::all();
        $jenisRegulasi = JenisRegulasi::all();
        return view("dashboard.kelola-halaman.regulasi", compact("regulasi", "jenisRegulasi"));
    }

    public function tambahRegulasi(Request $request)
    {
        // cari jenis regulasi
        $jenisRegulasi = JenisRegulasi::where("nama", $request->jenis_regulasi)->first();
        // jika jenis regulasi tidak ada, buat baru
        if (!$jenisRegulasi) {
            $jenisRegulasi = JenisRegulasi::create([
                "nama" => $request->jenis_regulasi,
            ]);
        }
        // simpan regulasi
        Regulasi::create([
            "jenis_regulasi_id" => $jenisRegulasi->id,
            "nama" => $request->nama,
            "file" => $request->file("file_file")->getClientOriginalName(),
        ]);
        $request->file("file_file")->storeAs("public/regulasi", $request->file("file_file")->getClientOriginalName());
        return back()->with("pesan", "tambah");
    }

    public function ubahRegulasi(Request $request)
    {
        // cari jenis regulasi
        $jenisRegulasi = JenisRegulasi::where("nama", $request->jenis_regulasi)->first();
        // jika jenis regulasi tidak ada, buat baru
        if (!$jenisRegulasi) {
            $jenisRegulasi = JenisRegulasi::create([
                "nama" => $request->jenis_regulasi,
            ]);
        }
        // simpan regulasi
        $regulasi = Regulasi::find($request->id);
        $regulasi->jenis_regulasi_id = $jenisRegulasi->id;
        $regulasi->nama = $request->nama;
        // cek apakah ada file yang diupload
        if ($request->file("file_file") != null) {
            $regulasi->file = $request->file("file_file")->getClientOriginalName();
            $request->file("file_file")->storeAs("public/regulasi", $request->file("file_file")->getClientOriginalName());
        }
        $regulasi->save();
        return back()->with("pesan", "ubah");
    }

    public function hapusRegulasi(Request $request)
    {
        Regulasi::find($request->id)->delete();
        return back()->with("pesan", "hapus");
    }
}
