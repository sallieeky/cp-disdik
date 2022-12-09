<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisRegulasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = [
            'Peraturan Pemerintah',
            'Peraturan Menteri Pendidikan dan Kebudayaan',
            'Peraturan Daerah',
            'Peraturan Walikota Balikpapan'
        ];
    }
}
