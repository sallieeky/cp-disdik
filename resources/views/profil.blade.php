@extends('layouts.base')
@section('title', 'Profil')
@section('content')
    
    {{-- HEADER --}}
    <section class="cover height-30 imagebg" id="home" style="
            background-blend-mode: multiply;
            background-color: #003049;
            background-repeat: no-repeat;
            background-size: 100%;
            object-fit: cover;
    ">
        <div class="container pos-vertical-center text-center">
            <p style="font-weight: 600; font-size: 2.3em">
                Profil Dinas Pendidikan Kota Balikpapan
            </p>
        </div>
        <!--end of container-->
    </section>
    <section class="bar bar-3 bar--sm bg--secondary px-3">
        <div class="bar__module">
            <span class="type--fade">Dibuat pada : Minggu, 10 November 2022 | Di upload oleh: admin</span>
        </div>
    </section>
    {{-- END HEADER --}}

    <section class="py-3 px-3">
        <div class="col-md-12">
            <ul class="accordion accordion-1 accordion--oneopen">
                <li class="active">
                    <div class="accordion__title">
                        <span class="h5">Profil Dinas</span>
                    </div>
                    <div class="accordion__content">
                        <p>
                            Profil Pendidikan Kota Balikpapan merupakan suatu model dalam menyusun profil pendidikan yang memberikan informasi tentang statistik pendidikan di Kota Balikpapan secara umum. Profil ini mencakup berbagai jenjang, jenis dan jalur pendidikan yang meliputi antara lain jumlah sekolah, tenaga pendidik dan kependidikan, peserta didik, sumber pembiayaan, angka partisipasi sekolah, angka mengulang, angka melanjutkan, jumlah putus sekolah, tahun siswa terbuang, jumlah keluaran dan masih banyak lagi.
            
                        </p>
                        <p>
                            Data yang digunakan untuk menyusun profil pendidikan ini terdiri data tahunan yang berasal dari Bagian Pengembangan Data dan Jaringan Kependidikan (PDJK) Dinas Pendidikan Kota Balikpapan, Badan Pusat Statistik Kota Balikpapan dan Dinas Kependudukan dan Catatan Sipil Kota Balikpapan. 
                        </p>
                        <p>
                            Profil Pendidikan Kota Balikpapan diupdate setiap tahun. Data beberapa tahun terakhir dapat dilihat pada dokumen-dokumen di bawah ini.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="accordion__title">
                        <span class="h5">Panel Two</span>
                    </div>
                    <div class="accordion__content">
                        Content
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection