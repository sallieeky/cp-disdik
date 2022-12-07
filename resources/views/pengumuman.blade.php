@extends('layouts.base')
@section('title', 'Pengumuman')
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
                Pengumuman Dinas Pendidikan Kota Balikpapan
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
                        <div class="masonry__item col-md-12">
                            @for ($i=1; $i<=5; $i++)
                            <section class="space--xs blog-article-wide">
                                <div class="container">
                                    <div class="row cta cta--horizontal text-center-xs">
                                        <div class="col-md-4">
                                            <h4>24th February 2017</h4>
                                        </div>
                                        <div class="col-md-5">
                                            <p class="lead">
                                                Building an enduring online audience
                                            </p>
                                        </div>
                                        <div class="col-md-3 text-right text-center-xs">
                                            <a class="btn type--uppercase" href="/pengumuman/detail/1">
                                                <span class="btn__text">
                                                    Read Article
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </section>
                            @endfor
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
    {{-- <section class="elements-title space--xxs text-center">
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
    </section> --}}
@endsection
