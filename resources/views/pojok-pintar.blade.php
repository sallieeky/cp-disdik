@extends('layouts.base')
@section('title', 'Pojok Pintar')
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
                Pojok Pintar Dinas Pendidikan Kota Balikpapan
            </p>
        </div>
        <!--end of container-->
    </section>

    <section class="bar bar-3 bar--sm bg--secondary">
        <div class="px-3">
            <div class="bar__module">
                <span class="type--fade">
                    <a href="/" style="text-decoration:none" class="text-dark">
                        <i class="fas fa-home"></i>
                    </a>
                    <i class="fas fa-angle-right"></i>
                    <a href="/pojok-pintar" style="text-decoration:none" class="text-dark">
                        Pojok Pintar
                    </a>
                </span>
            </div>
        </div>
    </section>
    {{-- END HEADER --}}

    <section class="space--sm py-3">
        <div class="row mx-1">
            <div class="col-md-12 col-lg-12">
                    @if (count($pojokPintar) == 0)
                    <div class="alert alert-warning" role="alert">
                        <strong>Maaf!</strong> Data tidak ditemukan.
                    </div>
                    @endif
                    <div class="col-md-8 offset-md-2">
                        @foreach ($pojokPintar as $dt)
                        <article class="masonry__item text-center">
                            <div class="article__title text-center">
                                <a href="/informasi/detail/{{ $dt->id }}">
                                    <h2>{{ $dt->judul }}</h2>
                                </a>
                                <span>
                                    {{-- format date --}}
                                    {{ date('d F Y', strtotime($dt->created_at)) }}
                                </span>
                            </div>
                            <!--end article title-->
                            <div class="article__body">
                                <a href="/informasi/detail/{{ $dt->id }}">
                                    <img alt="Image" src="/storage/informasi/{{ $dt->gambar }}" style="max-height: 300px" />
                                </a>
                                <p class="text-left">
                                    {!! substr(str_replace('<br />', ' ', $dt->deskripsi), 0, 200) !!}
                                </p>
                                <a href="/informasi/detail/{{ $dt->id }}" class="text-left">Baca selengkapnya &raquo;</a>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    @if (count($pojokPintar) > 0)
                    <div class="pagination">
                        <a class="pagination__prev" title="Previous Page" href="{{ $pojokPintar->previousPageUrl() }}">&laquo;</a>
                        <ol>
                        @for ($i = 1; $i <= $pojokPintar->lastPage(); $i++)
                            <li class="{{ ($pojokPintar->currentPage() == $i) ? ' pagination__current' : '' }}">
                                <a href="{{ $pojokPintar->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        </ol>
                        <a class="pagination__next" title="Next Page" href="{{ $pojokPintar->nextPageUrl() }}">&raquo;</a>
                    </div>
                    @endif
            </div>
        </div>
    </section>
@endsection
