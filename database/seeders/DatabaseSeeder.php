<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UmumSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JenisLinkSeeder::class);
        $this->call(ExternalLinkSeeder::class);
        $this->call(HalamanSeeder::class);
        $this->call(RegulasiSeeder::class);
        $this->call(PenghargaanSeeder::class);
        $this->call(KontakSeeder::class);
    }
}
