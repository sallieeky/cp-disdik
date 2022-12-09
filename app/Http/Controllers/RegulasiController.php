<?php

namespace App\Http\Controllers;

use App\Models\Regulasi;
use Illuminate\Http\Request;

class RegulasiController extends Controller
{
    public function index()
    {
        $regulasi = Regulasi::all();
        return view("dashboard.kelola-halaman.regulasi", compact("regulasi"));
    }
}
