<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            "user_id" => 1,
            "gambar" => "slider1.jpeg",
            "judul" => "Selamat datang di Dinas Pendidikan Kota Balikpapan"
        ]);
        Slider::create([
            "user_id" => 1,
            "gambar" => "beranda-hero.jpg",
            "judul" => "Dinas Pendidikan dan Kebudayaan Kota Balikpapan"
        ]);
    }
}
