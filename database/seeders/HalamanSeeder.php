<?php

namespace Database\Seeders;

use App\Models\Halaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = ["/tentang-kami", "/berita", "/pengumuman", "/pojok-pintar", "/regulasi", "/ppid", "/penghargaan", "/anggaran"];
        $judul = ["Tentang Kami", "Berita", "Pengumuman", "Pojok Pintar", "Regulasi", "PPID", "Penghargaan", "Anggaran"];
        for ($i = 0; $i < count($url); $i++) {
            Halaman::create([
                "url" => $url[$i],
                "judul" => $judul[$i],
                "tipe" => "statis"
            ]);
        }
    }
}
