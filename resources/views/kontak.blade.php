@extends('layouts.base')
@section('title', 'Kontak Kami')
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
                Kontak Dinas Pendidikan Kota Balikpapan
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
                <a href="/kontak-kami" style="text-decoration:none" class="text-dark">
                    Kontak Kami
                </a>
            </span>
        </div>
    </section>
    {{-- END HEADER --}}

    <section class="p-3">
      <div class="row justify-content-between">
        <div class="col-lg-5 col-md-5">
          <div class="switchable__text">
              <h3>{{ $kontak["Alamat"] }}</h3>
              <p class="lead">
                  Email: <a href="mailto:{{ $kontak["Email"] }}">{{ $kontak["Email"] }}</a><br>
                  Telepon: {{ $kontak["Telepon"] }}<br>
                  Instagram: <a href="{{ $kontak["Instagram"] }}">{{ $kontak["Instagram"] }}</a>@if($kontak["Instagram"] == null) - @endif<br>
                  Facebook: <a href="{{ $kontak["Facebook"] }}">{{ $kontak["Facebook"] }}</a>@if($kontak["Facebook"] == null) - @endif<br>
              </p>
              <p class="lead">
                  Kami buka tiap senin sampai jum'at dari jam 09.00 WITA &mdash; 16.00 WITA.
              </p>
          </div>
      </div>
        <div class="col-lg-6 col-md-7 col-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.879226619128!2d116.89368991453833!3d-1.2431514990932662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df145d9930e7ed7%3A0x9849b154cb9a871b!2sDinas%20Pendidikan%20Kota%20Balikpapan!5e0!3m2!1sid!2sid!4v1667717801662!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
@endsection
