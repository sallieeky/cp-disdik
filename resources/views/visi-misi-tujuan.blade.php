@extends('layouts.base')
@section('title', 'Visi, Misi, dan Tujuan')
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
                Visi Misi dan Tujuan Dinas Pendidikan Kota Balikpapan
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
                <img alt="Image" class="image" src="/storage/visimisitujuan/visi_misi.jpg" />
              </div>

              <div class="col-md-12 mt-5 text-justify">
                <h4>Tujuan dan Sasaran jangka menengah Dinas Pendidikan dan Kebudayaan :</h4>
                <p class="type--uppercase type--bold">Misi - 1 <br> MENINGKATKAN SUMBER DAYA MANUSIA YANG BERKUALITAS DAN BERDAYA SAING TINGGI</p>
                <p><span class="type--bold">Tujuan</span><br> Mewujudkan Sumber Daya Manusia yang cerdas intelektual, cerdas emosional, cerdas spiritual dan berdaya saing</p>
                <span class="type--bold">Sasaran</span>
                  <ol style="padding-left: 1.8em">
                    <li style="margin:0">Meningkatnya kualitas pendidikan</li>
                    <li style="margin:0">Meningkatkan kualitas hidup dan kesejahteraan masyarakat secara menyeluruh dan berkelanjutan</li>
                    <li style="margin:0">Meningkatkan kenyamanan keamanan dan ketertiban lingkungan</li>
                  </ol>
                <span class="type--bold">Arah Kebijakan</span>
                  <ol style="padding-left: 1.8em">
                    <li style="margin:0">Peningkatan Kualitas Pendidikan Non Formal Berbasis IPTEK dan Berlandaskan IMTAQ</li>
                    <li style="margin:0">Perluasaan subsidi pendidikan bagi seluruh peserta didik usia sekolah.</li>
                    <li style="margin:0">Peningkatan kualitas dan kuantitas Tenaga Pendidik serta Tenaga Kependidikan.</li>
                    <li style="margin:0">Perluasan program penanggulangan kemiskinan</li>
                    <li style="margin:0">Meningkatnya prestasi dan pelestarian kebudayaan daerah</li>
                    <li style="margin:0">Meningkatkan pelestarian cagar budaya</li>
                  </ol>
                <span class="type--bold">Program Pembangunan</span>
                  <ol style="padding-left: 1.8em">
                    <li style="margin:0">Program Pendidikan Non Formal</li>
                    <li style="margin:0">Program Pendidikan Anak Usia Dini</li>
                    <li style="margin:0">Program Pendidikan Dasar</li>
                    <li style="margin:0">Program Pendidikan Menengah</li>
                    <li style="margin:0">Program Peningkatan Mutu Pendidik Dan Tenaga Kependidikan</li>
                    <li style="margin:0">Program Penanggulangan Kemiskinan Terpadu</li>
                    <li style="margin:0">Program Penggelolaan Keanekaragaman Budaya</li>
                    <li style="margin:0">Program Pelestarian Cagar Budaya</li>
                  </ol>
              </div>
            </div>
        </div>
        <!--end of container-->
    </section>

    {{-- FOOTER --}}
    <section class="elements-title space--xxs text-center">
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
    </section>
    {{-- END FOOTER --}}
@endsection
