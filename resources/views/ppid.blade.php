@extends('layouts.base')
@section('title', 'PPID')
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
                PPID Dinas Pendidikan Kota Balikpapan
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
                <a href="/ppid" style="text-decoration:none" class="text-dark">
                    PPID
                </a>
            </span>
        </div>
    </section>
    {{-- END HEADER --}}

    <section class="py-3 px-3">
        <ul class="accordion accordion-1 accordion--oneopen">
            <li class="active">
                <div class="accordion__title">
                    <span class="h5">Penjelasan PPID</span>
                </div>
                <div class="accordion__content">
                    {!! $ppid["penjelasan ppid"] !!}
                </div>
            </li>
            <li>
                <div class="accordion__title">
                    <span class="h5">Daftar Informasi Publik</span>
                </div>
                <div class="accordion__content">
                    {!! $ppid["daftar informasi publik"] !!}
                    {{-- <img src="/storage/visimisitujuan/" class="img" alt="Visi dan Misi"> --}}
                </div>
            </li>
            <li>
                <div class="accordion__title">
                    <span class="h5">Alur Informasi Permohonan Publik</span>
                </div>
                <div class="accordion__content">
                    <img src="/storage/ppid/{{ $ppid["alur informasi permohonan publik"] }}" class="img" alt="alur informasi permohonan publik">
                </div>
            </li>
            <li>
                <div class="accordion__title">
                    <span class="h5">Hak dan Tata Cara PPID</span>
                </div>
                <div class="accordion__content">
                    Hak dan Tata cara memperoleh Informasi Publik dan Pengajuan Keberatan, dan Proses Penyelesaian sengketa IP berikut pihak-pihak yang bertanggung jawab yang dapat dihubungi (SOP PPID Kota Balikpapan yang berlaku di OPD)
                    <br>
                    <a href="/storage/ppid/{{ $ppid["hak dan tata cara ppid"] }}" class="text-dark" style="text-decoration: none">
                        <i class="fas fa-file-download"></i>
                        Download Hak dan Tata Cara PPID
                    </a>
                </div>
            </li>
        </ul>
    </section>
@endsection