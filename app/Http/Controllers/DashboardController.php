<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.beranda");
    }

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
        return view("dashboard.kelola-halaman");
    }
}
