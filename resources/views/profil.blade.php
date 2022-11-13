@extends('layouts.base')
@section('title', 'Profil')
@section('content')
    
    {{-- HEADER --}}
    <section class="cover height-30 imagebg" id="home" style="
            background-blend-mode: multiply;
            background-image: url(/img/beranda-hero.jpg);
            background-color: #003049;
            background-repeat: no-repeat;
            background-size: 100%;
            object-fit: cover;
    ">
        <div class="container pos-vertical-center">
            <p style="font-weight: 600; font-size: 2.3em">
                Profil Dinas Pendidikan Kota Balikpapan
            </p>
        </div>
        <!--end of container-->
    </section>
    <section class="bar bar-3 bar--sm bg--secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bar__module">
                        <span class="type--fade">Dibuat pada : Minggu, 10 November 2022 | Di upload oleh: admin</span>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    {{-- END HEADER --}}

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                
                <div class="col-md-12 mt-5">
                    <h5 class="p-0 m-0">Riwayat Profil</h5>
                    <table class="border--round table--alternate-row table-sm">
                        <thead>
                            <tr>
                                <th width="50%">Nama</th>
                                <th>Tanggal</th>
                                <th>Size</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fa-solid fa-file-zipper"></i> Profile 2010</td>
                                <td>2010-10-10</td>
                                <td>300 kb</td>
                                <td align="center"><a href="#"><i class="fa-solid fa-file-arrow-down" style="font-size: 2em"></i></a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end of container-->
    </section>

    {{-- FOOTER --}}
    {{-- <section class="elements-title space--xxs text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="type--uppercase">INFO LINK</h6>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <div class="slider slider--inline-arrows slider--arrows-hover text-center">
                        <ul class="slides">
                            <li class="col-md-3 col-6">
                                <a href="#">
                                    <img alt="Image" class="image--md" src="/img/info-link/BOS_Sekolah.jpg" />
                                </a>
                            </li>
                            <li class="col-md-3 col-6">
                                <a href="#">
                                    <img alt="Image" class="image--md" src="/img/info-link/DATA.jpg" />
                                </a>
                            </li>
                            <li class="col-md-3 col-6">
                                <a href="#">
                                    <img alt="Image" class="image--md" src="/img/info-link/INFO_KUIS_KIHAJAR.jpg" />
                                </a>
                            </li>
                            <li class="col-md-3 col-6">
                                <a href="#">
                                    <img alt="Image" class="image--md" src="/img/info-link/LHKPN.png" />
                                </a>
                            </li>
                            <li class="col-md-3 col-6">
                                <a href="#">
                                    <img alt="Image" class="image--md" src="/img/info-link/ppdb20201.jpg" />
                                </a>
                            </li>
                            <li class="col-md-3 col-6">
                                <a href="#">
                                    <img alt="Image" class="image--md" src="/img/info-link/SIRUP2.png" />
                                </a>
                            </li>
                            <li class="col-md-3 col-6">
                                <a href="#">
                                    <img alt="Image" class="image--md" src="/img/info-link/sp4nLapor.jpg" />
                                </a>
                            </li>
                            <li class="col-md-3 col-6">
                                <a href="#">
                                    <img alt="Image" class="image--md" src="/img/info-link/whistle_blower.jpg" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of col-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section> --}}
    {{-- END FOOTER --}}
@endsection
