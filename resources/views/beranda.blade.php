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
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

    {{-- <section class="cover height-80 imagebg text-center slider slider--ken-burns" data-arrows="true" data-paging="true">
        <ul class="slides">
            @foreach ($slider as $dt)
            <li class="imagebg" data-overlay="4">
                <div class="background-image-holder">
                    <img alt="background" src="/storage/slider/{{ $dt->gambar }}" />
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>
                                {{ $dt->judul }}
                            </h1>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </li>
            @endforeach
        </ul>
    </section> --}}
    <section class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <h2>Pengumuman</h2>
                    <p class="lead">
                        Pengumuman-pengumuman terbaru yang ada pada Dinas Pendidikan Kota Balikpapan
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <img alt="Image" src="/template/img/cowork-6.jpg" class="border--round" />
                        <h4>Startups</h4>
                        <p>
                            Quickly launch a professional site &mdash; minimal effort, maximum impact.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <img alt="Image" src="/template/img/cowork-7.jpg" class="border--round" />
                        <h4>Agencies</h4>
                        <p>
                            Deliver results to your clients faster than ever with rapid page building.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <img alt="Image" src="/template/img/knowledge-1.jpg" class="border--round" />
                        <h4>Freelancers</h4>
                        <p>
                            Stack is your silent partner, it does the heavy-lifting while you take the glory!
                        </p>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="bg--secondary p-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Informasi Terbaru</h2>
                    <div class="slider m-0 p-0" data-arrows="false" data-paging="true">
                        <ul class="slides">
                            <li class="col-md-4 col-12">
                                <div class="feature feature-1">
                                    <div class="feature__body boxed boxed--border p-3">
                                        <h5><a href="#" class="text-primary">Project H20 wdadi awdha idhi adhiawd hi</a></h5>
                                        <hr class="m-0 p-0">
                                        <small class="text-disabled">12 November 2022</small>
                                        <hr class="m-0 p-0">
                                        <p>
                                            Providing clean drinking water to remote villages in Burmah
                                        </p>
                                        <a href="#">
                                            Lihat detail
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-12">
                                <div class="feature feature-1">
                                    <div class="feature__body boxed boxed--border p-3">
                                        <h5><a href="#" class="text-primary">Project H20 wdadi awdha idhi adhiawd hi</a></h5>
                                        <hr class="m-0 p-0">
                                        <small class="text-disabled">12 November 2022</small>
                                        <hr class="m-0 p-0">
                                        <p>
                                            Providing clean drinking water to remote villages in Burmah
                                        </p>
                                        <a href="#">
                                            Lihat detail
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4 col-12">
                                <div class="feature feature-1">
                                    <div class="feature__body boxed boxed--border p-3">
                                        <h5><a href="#" class="text-primary">Project H20 wdadi awdha idhi adhiawd hi</a></h5>
                                        <hr class="m-0 p-0">
                                        <small class="text-disabled">12 November 2022</small>
                                        <hr class="m-0 p-0">
                                        <p>
                                            Providing clean drinking water to remote villages in Burmah
                                        </p>
                                        <a href="#">
                                            Lihat detail
                                        </a>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="col-md-4 col-12">
                                <div class="feature feature-1">
                                    <div class="feature__body boxed boxed--border">
                                        <h5>Drawn To Creativity</h5>
                                        <p>
                                            Providing creative materials to empower budding artists
                                        </p>
                                        <a href="#">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                                <!--end feature-->
                            </li>
                            <li class="col-md-4 col-12">
                                <div class="feature feature-1">
                                    <div class="feature__body boxed boxed--border">
                                        <h5>Built To Prosper</h5>
                                        <p>
                                            Providing stable dwellings for families in Tanzania
                                        </p>
                                        <a href="#">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                                <!--end feature-->
                            </li>
                            <li class="col-md-4 col-12">
                                <div class="feature feature-1">
                                    <div class="feature__body boxed boxed--border">
                                        <h5>Leaf Off Our Trees</h5>
                                        <p>
                                            Preserving endangered tree species in North America
                                        </p>
                                        <a href="#">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                                <!--end feature-->
                            </li> --}}
                        </ul>
                    </div>
                    <!--end of row-->
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
