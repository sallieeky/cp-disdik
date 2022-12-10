<?php

namespace App\Http\Controllers;

use App\Models\Ppid;
use Illuminate\Http\Request;

class PpidController extends Controller
{
    public function index()
    {
        // get ppid where nama = penjelasan ppid, daftar informasi publik, alur informasi permohonan publik, hak dan tata cara permohonan ppid as one object and nama as key and isi as value
        $ppid = Ppid::whereIn('nama', ['penjelasan ppid', 'daftar informasi publik', 'alur informasi permohonan publik', 'hak dan tata cara ppid'])->get()->pluck('isi', 'nama');
        return view('dashboard.kelola-halaman.ppid', compact('ppid'));
    }

    public function ubah(Request $request, $nama)
    {
        // get ppid where nama = $nama
        $ppid = Ppid::where('nama', $nama)->first();
        // ubah isi ppid
        // cek apakah ada file yang diupload $request->file('file_isi')
        if ($request->file('file_isi')) {
            // simpan file baru
            $ppid->isi = $request->file('file_isi')->getClientOriginalName();
            $request->file('file_isi')->storeAs('public/ppid', $request->file('file_isi')->getClientOriginalName());
        } else {
            // jika tidak ada, ubah isi ppid
            $ppid->isi = nl2br($request->isi);
        }
        // save ppid
        $ppid->save();
        return back()->with("pesan", "ubah");
    }
}
