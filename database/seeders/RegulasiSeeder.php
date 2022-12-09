<?php

namespace Database\Seeders;

use App\Models\JenisRegulasi;
use App\Models\Regulasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegulasiSeeder extends Seeder
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
        $peraturan = [
            [
                'Peraturan Pemerintah Nomor 19 Tahun 2017 tentang Perubahan atas Peraturan Pemerintah Nomor 74 Tahun 2008 tentang Guru.',
                'Peraturan Pemerintah Nomor 87 Tahun 2021 tentang Peraturan Pelaksanaan Undang-Undang Nomor 5 Tahun 2017 tentang Pemajuan Kebudayaan.',
                'Peraturan Pemerintah Nomor 1 Tahun 2022 tentang Register Nasional dan Pelestarian Cagar Budaya.',
                'Peraturan Pemerintah Nomor 4 Tahun 2022 tentang Perubahan atas Peraturan Pemerintah Nomor 57 Tahun 2021 tentang Standar Nasional Pendidikan.'
            ],
            [
                'Peraturan Menteri Pendidikan dan Kebudayaan Nomor 1 Tahun 2021 tentang PPDB.',
                'Peraturan Menteri Pendidikan dan Kebudayaan Nomor 28 Tahun 2021 tentang Organisasi dan Tata Kerja Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi. Organisasi dan Tata Kerja Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.',
                'Peraturan Menteri Pendidikan dan Kebudayaan Nomor 1 Tahun 2022 tentang Tata Cara Pemantauan dan Evaluasi Pelaksanaan Pokok Pikiran Kebudayaan Daerah. Tata Cara Pemantauan dan Evaluasi Pelaksanaan Pokok Pikiran Kebudayaan Daerah.',
                'Peraturan Menteri Pendidikan dan Kebudayaan Nomor 2 Tahun 2022 tentang Petunjuk Teknis Pengelolaan Dana Bantuan Operasional Penyelenggaraan Pendidikan Anak Usia Dini, Bantuan Operasional Sekolah, dan Bantuan Operasional Penyelenggaraan Pendidikan Kesetaraan.',
                'Peraturan Menteri Pendidikan dan Kebudayaan Nomor 3 Tahun 2022 tentang Petunjuk Operasional Dana Alokasi Khusus Fisik Bidang Pendidikan Tahun Anggaran 2022.',
                'Peraturan Menteri Pendidikan dan Kebudayaan Nomor 4 Tahun 2022 tentang Petunjuk Teknis Pemberian Tunjangan Profesi, Tunjangan Khusus, dan Tambahan Penghasilan Guru Aparatur Sipil Negara di Daerah Provinsi, Kabupaten/Kota.',
                'Peraturan Menteri Pendidikan dan Kebudayaan Nomor 5 Tahun 2022 tentang Standar Kompetensi Lulusan pada Pendidikan Anak Usia Dini, Jenjang Pendidikan Dasar, dan Jenjang Pendidikan Menengah.',
                'Peraturan Menteri Pendidikan dan Kebudayaan Nomor 7 Tahun 2022 tentang Standar Isi pada Pendidikan Anak Usia Dini, Jenjang Pendidikan Dasar, dan Jenjang Pendidikan Menengah.'
            ],
            [
                'Perda Nomor 2 Tahun 2017 tentang Penyelenggaraan Komunikasi dan Informatika'
            ],
            [
                'PERWALI Nomor 55 Tahun 2016 tentang SUSUNAN ORGANISASI, URAIAN TUGAS DAN FUNGSi',
                'PERWALI Nomor 12 Tahun 2018 tentang PPDB',
                'PERWALI Nomor 9 Tahun 2018 tentang Penyelenggaraan Pendidikan Inklusif',
                'PERWALI Nomor 32 Tahun 2018 tentang Pembentukan, Susunan Organisasi, Uraian Tugas dan Fungsi Unit Pelaksana Teknis Daerah Satuan Pendidikan pada Dinas Pendidikan dan Kebudayaan Kota Balikpapan.Pembentukan, Susunan Organisasi, Uraian Tugas dan Fungsi Unit Pelaksana Teknis Daerah Satuan Pendidikan pada Dinas Pendidikan dan Kebudayaan Kota Balikpapan.'
            ]
        ];
        foreach ($jenis as $key => $value) {
            $jenis = JenisRegulasi::create([
                'nama' => $value
            ]);
            foreach ($peraturan[$key] as $key2 => $value2) {
                Regulasi::create([
                    'jenis_regulasi_id' => $jenis->id,
                    'nama' => $value2,
                    'file' => "#"
                ]);
            }
        }
    }
}
