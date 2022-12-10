<?php

namespace App\Http\Controllers;

use App\Models\Ppid;
use Illuminate\Http\Request;

class PpidController extends Controller
{
    public function index()
    {
        // get ppid where nama = penjelasan ppid, daftar informasi publik, alur informasi permohonan publik, hak dan tata cara permohonan ppid as one object
        $ppid = Ppid::whereIn('nama', ['penjelasan ppid', 'daftar informasi publik', 'alur informasi permohonan publik', 'hak dan tata cara permohonan ppid'])->get();
        return $ppid;
        return view('dashboard.kelola-halaman.ppid');
    }
}
