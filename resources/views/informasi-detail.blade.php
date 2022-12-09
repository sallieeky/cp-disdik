@extends('layouts.base')
@section('title', 'Berita')
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
                Informasi Dinas Pendidikan Kota Balikpapan
            </p>
        </div>
        <!--end of container-->
    </section>

    <section class="bar bar-3 bar--sm bg--secondary">
        <div class="px-3">
            <div class="bar__module">
                <span class="type--fade">Dibuat pada : Minggu, 10 November 2022 | Di upload oleh: admin</span>
            </div>
        </div>
    </section>
    {{-- END HEADER --}}

    <section class="space--sm py-3">
        <div class="row mx-1">
          <div class="col-md-12 col-lg-8">
              <div class="masonry">
                  <div class="masonry__container row">
                      <div class="masonry__item col-md-12" data-masonry-filter="Marketing">
                        <article>
                          <div class="article__title text-center">
                              <h1 class="h2">{{ $informasi->judul }}</h1>
                              <span>{{ date('l, d F Y', strtotime($informasi->created_at)) }}</span>
                          </div>
                          <!--end article title-->
                          <div class="article__body">
                            <p class="text-center">
                                <img alt="Image" src="/storage/informasi/{{ $informasi->gambar }}" />
                            </p>
                            <p>
                                {!! $informasi->deskripsi !!}
                            </p>
                          </div>
                        </article>
                      </div>
                  </div>
              </div>
              <!--end masonry-->
          </div>

          <div class="col-lg-4 hidden-sm">
            <div class="mt-3 sidebar boxed boxed--border boxed--lg bg--secondary">
                <div class="sidebar__widget">
                    <h5>Kembali Ke Halaman</h5>
                    <ul>
                        <li><a href="/berita">Berita</a></li>
                        <li><a href="/pengumuman">Pengumuman</a></li>
                    </ul>
                </div>
                <!--end widget-->
                <div class="sidebar__widget">
                    <hr>
                    <h5>Berita Terbaru</h5>
                    @foreach ($terbaruBerita as $dt)
                    <h6 class="py-0 my-0 text-decoration-none"><a href="/informasi/detail/{{ $dt->id }}">{{ $dt->judul }}</a></h6>
                    <p>
                      {{ str_replace('<br />', ' ', $dt->deskripsi) }}
                    </p>
                    @endforeach 
                    <hr>
                    <h5>Pengumuman Terbaru</h5>
                    @foreach ($terbaruPengumuman as $dt)
                    <h6 class="py-0 my-0 text-decoration-none"><a href="/informasi/detail/{{ $dt->id }}">{{ $dt->judul }}</a></h6>
                    <p>
                      {{ str_replace('<br />', ' ', $dt->deskripsi) }}
                    </p>
                    @endforeach
                </div>
            </div>
          </div>
        </div>
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
@endsection
