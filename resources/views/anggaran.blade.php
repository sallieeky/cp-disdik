@extends('layouts.base')
@section('title', 'Anggaran')
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
                Laporan Anggaran Dinas Pendidikan Kota Balikpapan
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
                <a href="/anggaran" style="text-decoration:none" class="text-dark">
                    Anggaran
                </a>
            </span>
        </div>
    </section>
    {{-- END HEADER --}}

    <section class="py-3 px-3">
        <div class="row">
            {{-- buat tampilan kalau datanya kosong --}}
            @if ($jenisAnggaran->isEmpty())
                <div class="col-md-12">
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle"></i>
                        Data tidak ditemukan
                    </div>
                </div>
            @endif
            @foreach ($jenisAnggaran as $ja)
                @if($ja->anggaran->count() > 0)
                    <div class="col-md-12">
                        <h4 class="mb-3"><strong>{{ $ja->nama }}</strong></h4>
                        <table class="table table-striped table-bordered table-hover" id="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>File</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ja->anggaran as $dt)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dt->tahun }}</td>
                                        <td>
                                            <i class="fas fa-file-pdf"></i>
                                            {{ $dt->nama }}
                                        </td>
                                        <td>
                                            <a href="/storage/anggaran/{{ $dt->file }}" class="btn btn-primary btn-sm" download>
                                                <i class="fas fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endsection