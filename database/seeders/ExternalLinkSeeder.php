<?php

namespace Database\Seeders;

use App\Models\ExternalLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExternalLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gambar = ["BOS_Sekolah.jpg", "DATA.jpg", "INFO_KUIS_KIHAJAR.jpg", "LHKPN.png"];
        for ($i = 0; $i < count($gambar); $i++) {
            ExternalLink::create([
                "jenis_link_id" => "2",
                "gambar" => $gambar[$i],
                "url" => "#"
            ]);
        }
        $gambar = ["bener_semarmesem.jpg", "bener_ekin.jpg", "bener_simpelcerdas.jpg", "BOSDA.jpg", "logo_sadat_gtk.jpg"];
        for ($i = 0; $i < count($gambar); $i++) {
            ExternalLink::create([
                "jenis_link_id" => "1",
                "gambar" => $gambar[$i],
                "url" => "#"
            ]);
        }

        $gambar = ["b-kihajar.png", "b-rumahbelajar.png", "b-suaraedukasi.png", "b-tvedukasi.png"];
        $url = ["http://kihajar.kemdikbud.go.id/", "http://belajar.kemdikbud.go.id/", "http://tve.kemdikbud.go.id/", "#"];
        for ($i = 0; $i < count($gambar); $i++) {
            ExternalLink::create([
                "jenis_link_id" => "3",
                "gambar" => $gambar[$i],
                "url" => $url[$i]
            ]);
        }
    }
}
