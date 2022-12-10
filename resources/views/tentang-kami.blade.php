@extends('layouts.base')
@section('title', 'Tentang Kami')
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
                Tentang Dinas Pendidikan Kota Balikpapan
            </p>
        </div>
        <!--end of container-->
    </section>
    <section class="bar bar-3 bar--sm bg--secondary px-3">
        <div class="bar__module">
            <span class="type--fade">
                {{-- make breadcrumb with icon --}}
                <a href="/" style="text-decoration:none" class="text-dark">
                    <i class="fas fa-home"></i>
                </a>
                <i class="fas fa-angle-right"></i>
                <a href="/tentang-kami" style="text-decoration:none" class="text-dark">
                    Tentang Kami
                </a>
            </span>
        </div>
    </section>
    {{-- END HEADER --}}

    <section class="py-3 px-3">
        <ul class="accordion accordion-1 accordion--oneopen">
            <li class="active">
                <div class="accordion__title">
                    <span class="h5">Profil Dinas</span>
                </div>
                <div class="accordion__content">
                    {!! $profil->nilai !!}
                </div>
            </li>
            <li>
                <div class="accordion__title">
                    <span class="h5">Visi dan Misi</span>
                </div>
                <div class="accordion__content">
                    <img src="/storage/visimisitujuan/{{ $visimisi->nilai }}" class="img" alt="Visi dan Misi">
                </div>
            </li>
            <li>
                <div class="accordion__title">
                    <span class="h5">Struktur Organisasi</span>
                </div>
                <div class="accordion__content">
                    <img src="/storage/strukturorganisasi/{{ $strukturorganisasi->nilai }}" class="img" alt="Visi dan Misi">
                </div>
            </li>
            <li>
                <div class="accordion__title">
                    <span class="h5">Rencana Strategis</span>
                </div>
                <div class="accordion__content">
                    <div class="container">
                        <ul>
                            @foreach ($rencanastrategis as $rs)
                                <li><a href="/storage/renstra/{{ $rs->file }}" class="w-100 d-inline-block"><i class="fa fa-file-pdf"></i> {{ $rs->nama }} </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </section>
@endsection