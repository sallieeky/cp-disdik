<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenghargaanController extends Controller
{
    public function index()
    {
        return view("dashboard.kelola-halaman.penghargaan");
    }
}
