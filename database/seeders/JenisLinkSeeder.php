<?php

namespace Database\Seeders;

use App\Models\JenisLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $nama = ["Aplikasi Dinas Pendidikan", "Link Informasi", "Layanan Lainnya"];
        foreach ($nama as $nm) {
            JenisLink::create([
                "nama" => $nm
            ]);
        }
    }
}
