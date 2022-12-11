@extends('layouts.dashboard-base')
@section("title", "Beranda")
@section("content")

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6 col-xl-4 col-lg-6">
      <div class="card o-hidden border-0">
        <div class="bg-primary b-r-4 card-body">
          <div class="media static-top-widget">
            <div class="align-self-center text-center">
              <i data-feather="eye"></i>
            </div>
            <div class="media-body">
                <span class="m-0">Total Pengunjung</span>
                <h4 class="mb-0 counter">{{ $pengunjung }}</h4>
                <i class="icon-bg" data-feather="eye"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-4 col-lg-6">
      <div class="card o-hidden border-0">
        <div class=" bg-dark b-r-4 card-body">
          <div class="media static-top-widget">
            <div class="align-self-center text-center">
                <i data-feather="file"></i>
            </div>
            <div class="media-body">
                <span class="m-0">Total Halaman</span>
                <h4 class="mb-0 counter">{{ count($halaman) }}</h4>
                <i class="icon-bg" data-feather="file"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-4 col-lg-6">
      <div class="card o-hidden border-0">
        <div class="bg-warning b-r-4 card-body">
          <div class="media static-top-widget">
            <div class="align-self-center text-center">
                <i data-feather="info"></i>
            </div>
            <div class="media-body">
                <span class="m-0">Total Informasi</span>
                <h4 class="mb-0 counter">{{ $informasi }}</h4>
                <i class="icon-bg" data-feather="info"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Dashboard Company Profile Disdikbud Kota Balikpapan</h5>
        </div>
        <div class="card-body">
          <div class="row">
            <p>Anda dapat mengelola konten-konten yang ada pada halaman landing page company profile Dinas Pendidikan dan Kebudayaan Kota Balikpapan melalui dashboard ini</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0">
          <h5>Pintasan Kelola Halaman</h5>
        </div>
        <div class="card-body">
          <div class="row">
            @foreach ($halaman as $dt)
            <div class="col-md-3 mb-3">
              <a href="/dashboard/kelola-halaman{{ $dt->url }}"><i class="fa fa-gears"></i> {{ $dt->judul }}</a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection