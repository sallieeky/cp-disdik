<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.beranda");
    }

    public function externalLink()
    {
        return view("dashboard.external-link");
    }

    public function kelolaHalaman()
    {
        return view("dashboard.kelola-halaman");
    }
}
