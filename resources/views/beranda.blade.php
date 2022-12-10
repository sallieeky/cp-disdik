@extends('layouts.base')
@section('title', 'Beranda')
@section('content')

    <section class="cover height-90 imagebg parallax" data-overlay="4">
        <div class="background-image-holder">
            <div class="background-gradient-custom"></div>
            <img alt="background" src="/storage/hero/{{ $hero["hero"] }}" />
        </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-md-9 col-lg-7">
                    <h1 class="">
                        <strong>Disdikbud <span class="text-primary">Balikpapan</span></strong>
                    </h1>
                    <p class="lead">
                        {{ $hero["subtitle"] }}
                    </p>
                    {{-- buton selengkapnya --}}
                    <a class="btn btn--primary type--uppercase" href="/tentang-kami">
                        <span class="btn__text">
                            Selengkapnya
                        </span>
                    </a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><strong>Sambutan</strong></h2>
                    <p class="lead">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam provident veritatis fugit. Adipisci tempore explicabo magnam? Quod quas ipsum ipsam libero quis, at sint recusandae!
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="card card-2">
                        <div class="card__top">
                            <img alt="Image" class="border--round" src="/storage/hero/sambutan1.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="p-5">
        <div class="container">
            <h2 class="text-center"><strong>Berita <span class="text-primary">Terbaru</span></strong></h2>
            <div class="row">
                {{-- buat kalau halaman kosong --}}
                @if (count($berita) == 0)
                    <div class="col-md-12">
                        <div class="alert alert-warning">
                            <strong>Tidak ada berita terbaru.</strong> 
                        </div>
                    </div>
                @endif
                @foreach ($berita as $dt)
                <div class="col-md-4">
                    <div class="feature feature-1">
                        <a href="/informasi/detail/{{ $dt->id }}"><img alt="Image" src="/storage/informasi/{{ $dt->gambar }}" class="border--round" /></a>
                        <div class="feature__body boxed boxed--border">
                            <a href="/informasi/detail/{{ $dt->id }}" style="text-decoration: none"><h4><strong>{{ $dt->judul }}</strong></h4></a>
                            <p>
                                {{ substr($dt->deskripsi, 0, 20) }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--end of row-->
            {{-- button selengkapnya --}}
            @if(count($berita) > 0)
            <div class="text-center mt-5">
                <a class="btn btn--primary type--uppercase" href="/berita">
                    <span class="btn__text">
                        Selengkapnya
                    </span>
                </a>
            </div>
            @endif
        </div>
        <!--end of container-->
    </section>
    <section class="bg--secondary">
        <div class="container">
            <div class="row">                
                <div class="col-md-12">
                    <h2 class="text-center"><strong>Pengumuman <span class="text-primary">Terbaru</span></strong></h2>
                    <div class="row">
                        {{-- buat kalau halaman kosong --}}
                        @if (count($pengumuman) == 0)
                            <div class="col-md-12">
                                <div class="alert alert-warning">
                                    <strong>Tidak ada pengumuman terbaru.</strong> 
                                </div>
                            </div>
                        @endif
                        @foreach ($pengumuman as $dt)
                        <div class="col-md-3 col-12">
                            <div class="feature feature-1">
                                <div class="feature__body boxed boxed--border p-3">
                                    <h5><a href="/informasi/detail/{{ $dt->id }}" class="text-primary">{{ $dt->judul }}</a></h5>
                                    <hr class="m-0 p-0">
                                    <small class="text-disabled">
                                        {{ $dt->created_at->format('d M Y') }}
                                    </small>
                                    <hr class="m-0 p-0">
                                    <p>
                                        {{ substr($dt->deskripsi, 0, 50) }}
                                    </p>
                                    <a href="/informasi/detail/{{ $dt->id }}">
                                        Lihat detail
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if(count($berita) > 0)
                    <div class="text-center mt-5">
                        <a class="btn btn--primary type--uppercase" href="/pengumuman">
                            <span class="btn__text">
                                Selengkapnya
                            </span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <h2 class="m-0">Layanan Lainnya</h2>
                    <p class="lead">
                        layanan-layanan yang berhubungan dengan Dinas Pendidikan Kota Balikpapan.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                @foreach ($layananlainnya as $dt)
                <a href="{{ $dt->url }}" target="_blank">
                    <img src="/storage/external-link/{{ $dt->gambar }}" alt="{{ $dt->url }}" class="img" width="200">
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
