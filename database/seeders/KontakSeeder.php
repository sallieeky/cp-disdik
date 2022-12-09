<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kontak::create([
            "nama" => "Alamat",
            "isi" => "Jl. Ruhui Rahayu 1, Sepinggan, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76115"
        ]);

        Kontak::create([
            "nama" => "Telepon",
            "isi" => "(0542) 888 888"
        ]);

        Kontak::create([
            "nama" => "Email",
            "isi" => "disdik@mail.com"
        ]);

        Kontak::create([
            "nama" => "Instagram",
            "isi" => "https://www.facebook.com/disdikbalikpapan"
        ]);

        Kontak::create([
            "nama" => "Facebook",
            "isi" => "https://www.facebook.com/disdikbalikpapan"
        ]);
    }
}
