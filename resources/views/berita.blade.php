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
                Berita Dinas Pendidikan Kota Balikpapan
            </p>
        </div>
        <!--end of container-->
    </section>

    <section class="bar bar-3 bar--sm bg--secondary">
        <div class="px-3">
            <div class="bar__module">
                <span class="type--fade">
                    <div class="bar__module">
                        <span class="type--fade">
                            <a href="/" class="text-dark" style="text-decoration:none">
                                <i class="fas fa-home"></i>
                            </a>
                            <i class="fas fa-angle-right"></i>
                            <a href="/berita" class="text-dark" style="text-decoration:none">
                                Berita
                            </a>
                        </span>
                    </div>
                </span>
            </div>
        </div>
    </section>
    {{-- END HEADER --}}

    <section class="space--sm py-3">
          <div class="row mx-1">
              <div class="col-md-12 col-lg-8">
                  <div class="masonry">
                      <div class="masonry__container row">
                        @if (count($berita) == 0)
                          <div class="col-md-12">
                            <div class="alert alert-warning" role="alert">
                              <h4 class="alert-heading">Data Kosong</h4>
                              <p>Belum ada berita yang di upload</p>
                            </div>
                          </div>
                        @endif
                        @foreach ($berita as $dt)
                          <div class="masonry__item col-md-6" data-masonry-filter="Marketing">
                              <article class="feature feature-1">
                                  <a href="/informasi/detail/{{ $dt->id }}" class="block text-center bg--primary">
                                      <img alt="Image" src="/storage/informasi/{{ $dt->gambar }}" />
                                  </a>
                                  <div class="feature__body boxed boxed--border">
                                    <span>{{ date('l, d F Y', strtotime($dt->created_at)) }}</span>
                                      <h5>{{ $dt->judul }}</h5>
                                      <a href="/informasi/detail/{{ $dt->id }}">
                                          Baca selengkapnya
                                      </a>
                                  </div>
                              </article>
                          </div>
                        @endforeach
                      </div>
                      <!--end of masonry container-->
                      @if (count($berita) > 0)
                      <div class="pagination">
                          <a class="pagination__prev" title="Previous Page" href="{{ $berita->previousPageUrl() }}">&laquo;</a>
                          <ol>
                            @for ($i = 1; $i <= $berita->lastPage(); $i++)
                              <li class="{{ ($berita->currentPage() == $i) ? ' pagination__current' : '' }}">
                                  <a href="{{ $berita->url($i) }}">{{ $i }}</a>
                              </li>
                            @endfor
                          </ol>
                          <a class="pagination__next" title="Next Page" href="{{ $berita->nextPageUrl() }}">&raquo;</a>
                      </div>
                      @endif
                  </div>
                  <!--end masonry-->
              </div>

              <div class="col-lg-4 hidden-sm">
                  <div class="mt-3 sidebar boxed boxed--border boxed--lg bg--secondary">
                      <div class="sidebar__widget">
                          <h5>Cari Berita</h5>
                          <form method="GET" action="/berita">
                              <input type="text" name="cari" placeholder="Type search here" />
                          </form>
                      </div>
                      <!--end widget-->
                      <div class="sidebar__widget">
                          <h5>Berita Terbaru</h5>
                          @foreach ($terbaru as $dt)
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
@endsection
