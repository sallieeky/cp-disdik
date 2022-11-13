@extends('layouts.base')
@section('title', 'Struktur Organisasi')
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
                Struktur Organisasi Dinas Pendidikan Kota Balikpapan
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
              <img alt="Image" class="image" src="/storage/strukturorganisasi/Struktur2017.jpg" />
            </div>
            <div class="col-md-12 mt-5 text-justify">
              <p>Untuk menyelenggarakan tugas tersebut, <span class="type--bold">Dinas Pendidikan dan Kebudayaan Kota Balikpapan</span>  mempunyai fungsi :</p>
              <ol style="padding-left: 1.8em; list-style:lower-alpha">
                <li style="margin:0">perumusan kebijakan, penyusunan program dan kegiatan urusan di bidang pendidikan dan kebudayaan;</li>
                <li style="margin:0">penyusunan rencana pembiayaan penyelenggaraan pembelajaran, kurikulum, prasarana dan sarana, pembinaan dan pengembangan guru dan tenaga kependidikan;</li>
                <li style="margin:0">penyelenggaraan pengawasan, pengendalian, evaluasi pembelajaran pendidikan formal, non formal dan informal, PAUD dan Pendidikan masyarakat;</li>
                <li style="margin:0">pelaksanaan pembinaan dan pengendalian pengelolaan sarana prasarana pendidikan dan kebudayaan;</li>
                <li style="margin:0">penyelenggaraan pemantauan, pengendalian dan analisa kelayakan kurikulum, prasarana dan sarana serta mutu pendidikan;</li>
                <li style="margin:0">pelaksanaan evaluasi pencapaian standar nasional Pendidikan pada pendidikan formal, non formal dan informal, PAUD dan pendidikan masyarakat;</li>
                <li style="margin:0">penyelenggaraan layanan perizinan/rekomendasi/surat keterangan di bidang pendidikan dan di bidang kebudayaan;</li>
                <li style="margin:0">pelaksanaan kebijakan pembiayaan, kurikulum, dan pengendalian mutu pendidikan dan kebudayaan;</li>
                <li style="margin:0">pembinaan dan pengendalian UPT Dinas; dan</li>
                <li style="margin:0">pelaksanaan tugas lainnya yang diberikan oleh pimpinan/ atasan sesuai tugas dan fungsinya.</li>
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
@endsection
