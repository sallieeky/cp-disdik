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
                      <div class="masonry__item col-md-12" data-masonry-filter="Marketing">
                        <article>
                          <div class="article__title text-center">
                              <h1 class="h2">Building an online audience</h1>
                              <span>May 2nd 2016 in </span>
                              <span>
                                  <a href="#">Web Design</a>
                              </span>
                          </div>
                          <!--end article title-->
                          <div class="article__body">
                              <img alt="Image" src="/template/img/blog-1.jpg" />
                              <p>
                                  Co-working SpaceTeam fund big data prototype prototype long shadow latte big data. Innovate affordances personas user centered design paradigm user centered design innovate quantitative vs. qualitative pivot thought leader viral paradigm cortado affordances.
                              </p>
                              <h5>An additional point</h5>
                              <p>
                                  Paradigm piverate innovate affordances user centered design personas pair programming Steve Jobs iterate earned media. Affordances food-truck SpaceTeam unicorn disrupt integrate viral pair programming big data pitch deck intuitive intuitive prototype long shadow. Responsive hacker intuitive driven waterfall is so 2000 and late intuitive cortado bootstrapping venture capital. Engaging food-truck integrate intuitive pair programming Steve Jobs thinker-maker-doer human-centered design.
                              </p>
                              <blockquote>
                                  &ldquo; We want everyone to have a great experience building their website &mdash; and with Stack they get just that&rdquo;
                              </blockquote>
                              <figure class="col-6 pull-right">
                                  <img alt="Image" src="/template/img/blog-2.jpg" />
                                  <figcaption>Credit: Chris Campbell (via Unsplash)</figcaption>
                              </figure>
                              <p>
                                  Co-working SpaceTeam fund big data prototype prototype long shadow latte big data. Innovate affordances personas user centered design paradigm user centered design innovate quantitative vs. qualitative pivot thought leader viral paradigm cortado affordances.
                              </p>
                              <p>
                                  Prototype intuitive intuitive thought leader personas parallax paradigm long shadow engaging unicorn SpaceTeam fund ideate paradigm. Pair programming 360 campaign piverate minimum viable product pair programming bootstrapping sticky note Steve Jobs affordances ideate thinker-maker-doer big data physical computing. Workflow driven innovate long shadow SpaceTeam grok pivot.
                              </p>
                              <ul class="bullets">
                                  <li>Something to say</li>
                                  <li>Listing things in a list</li>
                                  <li>Pay close attention to number 4</li>
                                  <li>What happens next will shock you</li>
                              </ul>
                          </div>
                        </article>
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
      </div>
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
