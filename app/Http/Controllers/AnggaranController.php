<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use App\Models\JenisAnggaran;
use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    public function index()
    {
        $anggaran = Anggaran::all();
        $jenisAnggaran = JenisAnggaran::all();
        return view('dashboard.kelola-halaman.anggaran', compact('anggaran', 'jenisAnggaran'));
    }

    public function tambahAnggaran(Request $request)
    {
        // cari jenis anggaran
        $jenisAnggaran = JenisAnggaran::where('nama', $request->jenis_anggaran)->first();
        // jika jenis anggaran tidak ada, buat baru
        if (!$jenisAnggaran) {
            $jenisAnggaran = JenisAnggaran::create([
                'nama' => $request->jenis_anggaran,
            ]);
        }
        // simpan anggaran
        Anggaran::create([
            'jenis_anggaran_id' => $jenisAnggaran->id,
            'nama' => $request->nama,
            'file' => $request->file('file_file')->getClientOriginalName(),
        ]);
        $request->file('file_file')->storeAs('public/anggaran', $request->file('file_file')->getClientOriginalName());
        return back()->with('pesan', 'tambah');
    }

    public function ubahAnggaran(Request $request)
    {
        // cari jenis anggaran
        $jenisAnggaran = JenisAnggaran::where('nama', $request->jenis_anggaran)->first();
        // jika jenis anggaran tidak ada, buat baru
        if (!$jenisAnggaran) {
            $jenisAnggaran = JenisAnggaran::create([
                'nama' => $request->jenis_anggaran,
            ]);
        }
        // simpan anggaran
        $anggaran = Anggaran::find($request->id);
        $anggaran->jenis_anggaran_id = $jenisAnggaran->id;
        $anggaran->nama = $request->nama;
        // cek apakah ada file yang diupload
        if ($request->file('file_file') != null) {
            $anggaran->file = $request->file('file_file')->getClientOriginalName();
            $request->file('file_file')->storeAs('public/anggaran', $request->file('file_file')->getClientOriginalName());
        }
        $anggaran->save();
        return back()->with('pesan', 'ubah');
    }

    public function hapusAnggaran(Request $request)
    {
        Anggaran::destroy($request->id);
        return back()->with('pesan', 'hapus');
    }
}
