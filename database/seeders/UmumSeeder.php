<?php

namespace Database\Seeders;

use App\Models\Umum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Umum::create([
            "nama" => "icon",
            "nilai" => "logo.jpg",
            "user_id" => 1
        ]);
        Umum::create([
            "nama" => "pengunjung",
            "nilai" => 0,
            "user_id" => 1
        ]);
    }
}
