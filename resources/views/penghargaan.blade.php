@extends('layouts.base')
@section('title', 'Penghargaan')
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
                Penghargaan Dinas Pendidikan Kota Balikpapan
            </p>
        </div>
        <!--end of container-->
    </section>
    <section class="bar bar-3 bar--sm bg--secondary px-3">
        <div class="bar__module">
            <span class="type--fade">
                <a href="/" style="text-decoration:none" class="text-dark">
                    <i class="fas fa-home"></i>
                </a>
                <i class="fas fa-angle-right"></i>
                <a href="/penghargaan" style="text-decoration:none" class="text-dark">
                    Penghargaan
                </a>
            </span>
        </div>
    </section>
    {{-- END HEADER --}}

    <section class="p-3">
        <div class="row">
            <div class="col-md-12">
                <div class="masonry">
                    <div class="masonry__container row">
                        @foreach ($penghargaan as $dt)
                        <div class="masonry__item col-md-3" data-masonry-filter="Marketing">
                            <div class="card card-2 text-center">
                                <div class="card__top">
                                    <a href="/storage/penghargaan/{{ $dt->gambar }}" data-lightbox="true">
                                        <img alt="Image" src="/storage/penghargaan/{{ $dt->gambar }}">
                                    </a>
                                </div>
                                <div class="card__body">
                                    <h4 class="type--bold">{{ $dt->nama }}</h4>
                                    <p>
                                        {{ date('l, d F Y', strtotime($dt->created_at)) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--end of masonry container-->
                </div>
            </div>
        </div>
    </section>
@endsection
