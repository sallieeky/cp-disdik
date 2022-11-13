@extends('layouts.base')
@section('title', 'Berita')
@section('content')
  
    {{-- HEADER --}}
    <section class="cover height-30 imagebg" id="home" style="
            background-blend-mode: multiply;
            background-image: url(/img/beranda-hero.jpg);
            background-color: #003049;
            background-repeat: no-repeat;
            background-size: 100%;
            object-fit: cover;
    ">
        <div class="container pos-vertical-center">
            <p style="font-weight: 600; font-size: 2.3em">
                Berita Dinas Pendidikan Kota Balikpapan
            </p>
        </div>
        <!--end of container-->
    </section>

    <section class="bar bar-3 bar--sm bg--secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bar__module">
                        <span class="type--fade">Dibuat pada : Minggu, 10 November 2022 | Di upload oleh: admin</span>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    {{-- END HEADER --}}

    <section class="space--sm py-3">
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-lg-8">
                  <div class="masonry">
                      <div class="masonry__container row">
                          <div class="masonry__item col-md-6" data-masonry-filter="Marketing">
                              <article class="feature feature-1">
                                  <a href="/berita/detail/1" class="block">
                                      <img alt="Image" src="/template/img/blog-2.jpg" />
                                  </a>
                                  <div class="feature__body boxed boxed--border">
                                      <span>May 25th 2016</span>
                                      <h5>A day in the life of a professional fitness blogger</h5>
                                      <a href="/berita/detail/1">
                                          Read More
                                      </a>
                                  </div>
                              </article>
                          </div>
                          <!--end item-->
                          <div class="masonry__item col-md-6" data-masonry-filter="Marketing">
                              <article class="feature feature-1">
                                  <a href="/berita/detail/1" class="block">
                                      <img alt="Image" src="/template/img/blog-3.jpg" />
                                  </a>
                                  <div class="feature__body boxed boxed--border">
                                      <span>May 25th 2016</span>
                                      <h5>Small businesses that expertly leverage their online followings</h5>
                                      <a href="/berita/detail/1">
                                          Read More
                                      </a>
                                  </div>
                              </article>
                          </div>
                          <!--end item-->
                          <div class="masonry__item col-md-6" data-masonry-filter="Design">
                              <article class="feature feature-1">
                                  <a href="/berita/detail/1" class="block">
                                      <img alt="Image" src="/template/img/blog-4.jpg" />
                                  </a>
                                  <div class="feature__body boxed boxed--border">
                                      <span>May 25th 2016</span>
                                      <h5>Designing efficiently in the age of distraction</h5>
                                      <a href="/berita/detail/1">
                                          Read More
                                      </a>
                                  </div>
                              </article>
                          </div>
                          <!--end item-->
                          <div class="masonry__item col-md-6" data-masonry-filter="Inspiration">
                              <article class="feature feature-1">
                                  <a href="/berita/detail/1" class="block">
                                      <img alt="Image" src="/template/img/blog-5.jpg" />
                                  </a>
                                  <div class="feature__body boxed boxed--border">
                                      <span>May 25th 2016</span>
                                      <h5>Assembling an attractive workspace for creativity</h5>
                                      <a href="/berita/detail/1">
                                          Read More
                                      </a>
                                  </div>
                              </article>
                          </div>
                          <!--end item-->
                          <div class="masonry__item col-md-6" data-masonry-filter="Inspiration">
                              <article class="feature feature-1">
                                  <a href="/berita/detail/1" class="block">
                                      <img alt="Image" src="/template/img/blog-6.jpg" />
                                  </a>
                                  <div class="feature__body boxed boxed--border">
                                      <span>May 25th 2016</span>
                                      <h5>Our Favourite Things Q1 2016</h5>
                                      <a href="/berita/detail/1">
                                          Read More
                                      </a>
                                  </div>
                              </article>
                          </div>
                          <!--end item-->
                          <div class="masonry__item col-md-6" data-masonry-filter="Design">
                              <article class="feature feature-1">
                                  <a href="/berita/detail/1" class="block">
                                      <img alt="Image" src="/template/img/blog-1.jpg" />
                                  </a>
                                  <div class="feature__body boxed boxed--border">
                                      <span>May 25th 2016</span>
                                      <h5>Stack designer Marc Ruben offers freelancing advice</h5>
                                      <a href="/berita/detail/1">
                                          Read More
                                      </a>
                                  </div>
                              </article>
                          </div>
                          <!--end item-->
                      </div>
                      <!--end of masonry container-->
                      <div class="pagination">
                          <a class="pagination__prev" href="#" title="Previous Page">&laquo;</a>
                          <ol>
                              <li>
                                  <a href="#">1</a>
                              </li>
                              <li>
                                  <a href="#">2</a>
                              </li>
                              <li class="pagination__current">3</li>
                              <li>
                                  <a href="#">4</a>
                              </li>
                          </ol>
                          <a class="pagination__next" href="#" title="Next Page">&raquo;</a>
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
          <!--end of row-->
      </div>
      <!--end of container-->
    </section>

    {{-- FOOTER --}}
    <section class="elements-title space--xxs text-center">
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
    </section>
@endsection
