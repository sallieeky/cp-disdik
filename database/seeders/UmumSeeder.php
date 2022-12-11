<?php

namespace Database\Seeders;

use App\Models\Umum;
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
            "nilai" => 1,
            "user_id" => 1
        ]);
        Umum::create([
            "nama" => "hero",
            "nilai" => "slider1.jpeg",
            "user_id" => 1
        ]);
        Umum::create([
            "nama" => "subtitle",
            "nilai" => "Temukan informasi seputar Dinas Pendidikan dan Kebudayaan Kota Balikpapan disini",
            "user_id" => 1
        ]);
        Umum::create([
            "nama" => "profil",
            "nilai" => 'Profil Pendidikan Kota Balikpapan merupakan suatu model dalam menyusun profil pendidikan yang memberikan informasi tentang statistik pendidikan di Kota Balikpapan secara umum. Profil ini mencakup berbagai jenjang, jenis dan jalur pendidikan yang meliputi antara lain jumlah sekolah, tenaga pendidik dan kependidikan, peserta didik, sumber pembiayaan, angka partisipasi sekolah, angka mengulang, angka melanjutkan, jumlah putus sekolah, tahun siswa terbuang, jumlah keluaran dan masih banyak lagi.<br /><br /> Data yang digunakan untuk menyusun profil pendidikan ini terdiri data tahunan yang berasal dari Bagian Pengembangan Data dan Jaringan Kependidikan (PDJK) Dinas Pendidikan Kota Balikpapan, Badan Pusat Statistik Kota Balikpapan dan Dinas Kependudukan dan Catatan Sipil Kota Balikpapan.'
        ]);
        Umum::create([
            "nama" => "visimisi",
            "nilai" => "visi_misi.jpg"
        ]);
        Umum::create([
            "nama" => "strukturorganisasi",
            "nilai" => "Struktur_3.png"
        ]);

        // Kontak
        Umum::create([
            "nama" => "Alamat",
            "nilai" => "Jl. Ruhui Rahayu 1, Sepinggan, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur 76115"
        ]);

        Umum::create([
            "nama" => "Telepon",
            "nilai" => "(0542) 888 888"
        ]);

        Umum::create([
            "nama" => "Email",
            "nilai" => "disdik@mail.com"
        ]);

        Umum::create([
            "nama" => "Instagram",
            "nilai" => "https://www.instagram.com/disdikbalikpapan"
        ]);

        Umum::create([
            "nama" => "Facebook",
            "nilai" => "https://www.facebook.com/disdikbalikpapan"
        ]);
    }
}
