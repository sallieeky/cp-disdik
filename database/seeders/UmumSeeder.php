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
            "nilai" => 0,
            "user_id" => 1
        ]);
        Umum::create([
            "nama" => "profil",
            "nilai" => '<p style="margin-right: 0px; margin-bottom: 1.85714em; margin-left: 0px; padding: 0px; transition: all 0.3s linear 0s; display: inline-block; color: rgb(102, 102, 102); font-family: Quicksand, &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; letter-spacing: normal;">Profil Pendidikan Kota Balikpapan merupakan suatu model dalam menyusun profil pendidikan yang memberikan informasi tentang statistik pendidikan di Kota Balikpapan secara umum. Profil ini mencakup berbagai jenjang, jenis dan jalur pendidikan yang meliputi antara lain jumlah sekolah, tenaga pendidik dan kependidikan, peserta didik, sumber pembiayaan, angka partisipasi sekolah, angka mengulang, angka melanjutkan, jumlah putus sekolah, tahun siswa terbuang, jumlah keluaran dan masih banyak lagi.</p><p style="margin-right: 0px; margin-bottom: 1.85714em; margin-left: 0px; padding: 0px; transition: all 0.3s linear 0s; display: inline-block; color: rgb(102, 102, 102); font-family: Quicksand, &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; letter-spacing: normal;">Data yang digunakan untuk menyusun profil pendidikan ini terdiri data tahunan yang berasal dari Bagian Pengembangan Data dan Jaringan Kependidikan (PDJK) Dinas Pendidikan Kota Balikpapan, Badan Pusat Statistik Kota Balikpapan dan Dinas Kependudukan dan Catatan Sipil Kota Balikpapan.</p>'
        ]);
        Umum::create([
            "nama" => "visimisi",
            "nilai" => "visi_misi.jpg"
        ]);
        Umum::create([
            "nama" => "strukturorganisasi",
            "nilai" => "Struktur_3.png"
        ]);
    }
}
