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
        $url = ["/tentang-kami", "/berita", "/pengumuman", "/regulasi", "/penghargaan"];
        $judul = ["Tentang Kami", "Berita", "Pengumuman", "Regulasi", "Penghargaan"];
        for ($i = 0; $i < count($url); $i++) {
            Halaman::create([
                "url" => $url[$i],
                "judul" => $judul[$i],
                "tipe" => "statis"
            ]);
        }
    }
}
