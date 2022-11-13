@extends('layouts.base')
@section('title', 'Penghargaan')
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
                Penghargaan Dinas Pendidikan Kota Balikpapan
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
              <div class="col-md-4">
                <div class="card card-2 text-center">
                    <div class="card__top">
                        <a href="/storage/penghargaan/Penghargaan_1.jpeg" data-lightbox="true">
                            <img alt="Image" src="/storage/penghargaan/Penghargaan_1.jpeg">
                        </a>
                    </div>
                    <div class="card__body">
                        <h4 class="type--bold">Penghargaan dari Gubernur Kalimantan Timur Terbaik I (satu) Bidang Kedudayaan Kota Dalam rangka HUT ke 62 Provinsi Kalimantan Timur</h4>
                        <p>
                          9 Januari 2020
                        </p>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection
