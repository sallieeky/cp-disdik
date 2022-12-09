<?php

namespace Database\Seeders;

use App\Models\Penghargaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenghargaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penghargaan::create([
            "nama" => "Penghargaan dari Gubernur Kalimantan Timur Terbaik I (satu) Bidang Kedudayaan Kota Dalam rangka HUT ke 62 Provinsi Kalimantan Timur",
            "gambar" => "Penghargaan_1.jpeg",
        ]);
    }
}
