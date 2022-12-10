<?php

namespace Database\Seeders;

use App\Models\Ppid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PpidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ppid::create([
            "nama" => "penjelasan ppid",
            "isi" => "penjelasan ppid"
        ]);

        Ppid::create([
            "nama" => "daftar informasi publik",
            "isi" => "daftar informasi publik"
        ]);

        Ppid::create([
            "nama" => "alur informasi permohonan publik",
            "isi" => "alur_permohonan.png"
        ]);

        Ppid::create([
            "nama" => "hak dan tata cara ppid",
            "isi" => "Perwal_SOP_PPID_2015.pdf"
        ]);
    }
}
