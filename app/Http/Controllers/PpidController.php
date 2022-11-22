<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PpidController extends Controller
{
    public function index()
    {
        return view("dashboard.kelola-halaman.ppid");
    }
}
