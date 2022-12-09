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
                        @foreach ($berita as $dt)
                          <div class="masonry__item col-md-6" data-masonry-filter="Marketing">
                              <article class="feature feature-1">
                                  <a href="/berita/detail/1" class="block text-center bg--primary">
                                      <img alt="Image" src="/storage/informasi/{{ $dt->gambar }}" />
                                  </a>
                                  <div class="feature__body boxed boxed--border">
                                    <span>{{ date('l, d F Y', strtotime($dt->created_at)) }}</span>
                                      <h5>{{ $dt->judul }}</h5>
                                      <a href="/berita/detail/1">
                                          Read More
                                      </a>
                                  </div>
                              </article>
                          </div>
                        @endforeach
                      </div>
                      <!--end of masonry container-->
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
                  </div>
                  <!--end masonry-->
              </div>
              <div class="col-lg-4 hidden-sm">
                  <div class="mt-3 sidebar boxed boxed--border boxed--lg bg--secondary">
                      <div class="sidebar__widget">
                          <h5>Search site</h5>
                          <form>
                              <input type="text" name="query" placeholder="Type search here" />
                          </form>
                      </div>
                      <!--end widget-->
                      <div class="sidebar__widget">
                          <h5>Text Widget</h5>
                          <p>
                              Our new digital products will take your workflow to all-new levels of high productivity. We know you'll find everything you need - and more! Start building with Stack.
                          </p>
                      </div>
                      <!--end widget-->
                      <div class="sidebar__widget">
                          <h5>Tags</h5>
                          <ul class="tag-cloud">
                              <li>
                                  <a href="#">Freelancing</a>
                              </li>
                              <li>
                                  <a href="#">Design</a>
                              </li>
                              <li>
                                  <a href="#">Small Business</a>
                              </li>
                              <li>
                                  <a href="#">Entrepreneurship</a>
                              </li>
                              <li>
                                  <a href="#">Marketing</a>
                              </li>
                              <li>
                                  <a href="#">Inspiration</a>
                              </li>
                          </ul>
                      </div>
                      <!--end widget-->
                      <div class="sidebar__widget">
                          <h5>Categories</h5>
                          <ul>
                              <li>
                                  <a href="#">Freelancing</a>
                              </li>
                              <li>
                                  <a href="#">Design</a>
                              </li>
                              <li>
                                  <a href="#">Small Business</a>
                              </li>
                              <li>
                                  <a href="#">Entrepreneurship</a>
                              </li>
                              <li>
                                  <a href="#">Marketing</a>
                              </li>
                              <li>
                                  <a href="#">Inspiration</a>
                              </li>
                          </ul>
                      </div>
                      <!--end widget-->
                      <div class="sidebar__widget">
                          <h5>Archives</h5>
                          <ul>
                              <li>
                                  <a href="#">August 2016</a>
                              </li>
                              <li>
                                  <a href="#">July 2016</a>
                              </li>
                              <li>
                                  <a href="#">June 2016</a>
                              </li>
                              <li>
                                  <a href="#">May 2016</a>
                              </li>
                          </ul>
                      </div>
                      <!--end widget-->
                  </div>
              </div>
          </div>
    </section>
@endsection
