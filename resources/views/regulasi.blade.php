@extends('layouts.base')
@section('title', 'Regulasi')
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
                Regulasi Dinas Pendidikan Kota Balikpapan
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
              <a href="/regulasi" style="text-decoration:none" class="text-dark">
                  Regulasi
              </a>
          </span>
      </div>
    </section>
    {{-- END HEADER --}}

    <section class="text-center p-3">
      <div class="row">
          <div class="col-md-12">
              {{-- <div class="tabs-container" data-content-align="left">
                  <ul class="tabs">
                    @foreach ($jenisRegulasi as $jr)
                    <li class="@if($loop->iteration == 1) active @endif">
                      <div class="tab__title">
                        <span class="h5">{{ $jr->nama }}</span>
                      </div>
                      <div class="tab__content">
                        <ol style="padding-left: 1.8em">
                          @foreach ($jr->regulasi as $dt)
                              <li style="margin:0"><a href="/storage/regulasi/{{ $dt->file }}" target="_blank">{{ $dt->nama }}</a></li>
                          @endforeach
                        </ol>
                      </div>
                    </li>
                    @endforeach
                  </ul>
              </div> --}}
              <!--end of tabs container-->
              <div class="tabs-container tabs--vertical">
                <ul class="tabs">
                  @foreach ($jenisRegulasi as $jr)
                    @if($jr->regulasi->count() > 0)
                    <li class="@if($loop->iteration == 1) active @endif">
                        <div class="tab__title">
                            <span class="h5">{{ $jr->nama }}</span>
                        </div>
                        <div class="tab__content text-left">
                          <ol style="padding-left: 1.8em">
                          @foreach ($jr->regulasi as $dt)
                              <li style="margin:0"><a href="/storage/regulasi/{{ $dt->file }}" target="_blank">{{ $dt->nama }}</a></li>
                          @endforeach
                          </ol>
                        </div>
                    </li>
                    @endif
                  @endforeach
                </ul>
              </div>
          </div>
      </div>
    </section>

    {{-- <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5 text-justify">
                    <span class="type--bold">Regulasi Undang-Undang</span>
                      <ol style="padding-left: 1.8em">
                        <li style="margin:0"><a href="#" target="_blank">Undang-Undang Nomor 14 Tahun 2005 tentang Guru dan Dosen</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional</a></li>
                      </ol>
                    <span class="type--bold">Peraturan Pemerintah</span>
                      <ol style="padding-left: 1.8em">
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Pemerintah Nomor 66 Tahun 2010 tentang Perubahan Atas Peraturan Pemerintah Nomor 17 Tahun 2010 Tentang Pengelolaan Dan Penyelenggaraan Pendidikan.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Pemerintah Nomor 19 Tahun 2017 tentang Perubahan atas Peraturan Pemerintah Nomor 74 Tahun 2008 tentang Guru.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Pemerintah Nomor 87 Tahun 2021 tentang Peraturan Pelaksanaan Undang-Undang Nomor 5 Tahun 2017 tentang Pemajuan Kebudayaan.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Pemerintah Nomor 1 Tahun 2022 tentang Register Nasional dan Pelestarian Cagar Budaya.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Pemerintah Nomor 4 Tahun 2022 tentang Perubahan atas Peraturan Pemerintah Nomor 57 Tahun 2021 tentang Standar Nasional Pendidikan.</a></li>
                      </ol>
                    <span class="type--bold">Peraturan Menteri Pendidikan dan Kebudayaan</span>
                      <ol style="padding-left: 1.8em">
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Menteri Pendidikan dan Kebudayaan Nomor 1 Tahun 2021 tentang PPDB.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Menteri Pendidikan dan Kebudayaan Nomor 28 Tahun 2021 tentang Organisasi dan Tata Kerja Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi. Organisasi dan Tata Kerja Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Menteri Pendidikan dan Kebudayaan Nomor 1 Tahun 2022 tentang Tata Cara Pemantauan dan Evaluasi Pelaksanaan Pokok Pikiran Kebudayaan Daerah. Tata Cara Pemantauan dan Evaluasi Pelaksanaan Pokok Pikiran Kebudayaan Daerah.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Menteri Pendidikan dan Kebudayaan Nomor 2 Tahun 2022 tentang Petunjuk Teknis Pengelolaan Dana Bantuan Operasional Penyelenggaraan Pendidikan Anak Usia Dini, Bantuan Operasional Sekolah, dan Bantuan Operasional Penyelenggaraan Pendidikan Kesetaraan.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Menteri Pendidikan dan Kebudayaan Nomor 3 Tahun 2022 tentang Petunjuk Operasional Dana Alokasi Khusus Fisik Bidang Pendidikan Tahun Anggaran 2022.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Menteri Pendidikan dan Kebudayaan Nomor 4 Tahun 2022 tentang Petunjuk Teknis Pemberian Tunjangan Profesi, Tunjangan Khusus, dan Tambahan Penghasilan Guru Aparatur Sipil Negara di Daerah Provinsi, Kabupaten/Kota.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Menteri Pendidikan dan Kebudayaan Nomor 5 Tahun 2022 tentang Standar Kompetensi Lulusan pada Pendidikan Anak Usia Dini, Jenjang Pendidikan Dasar, dan Jenjang Pendidikan Menengah.</a></li>
                        <li style="margin:0"><a href="#" target="_blank">Peraturan Menteri Pendidikan dan Kebudayaan Nomor 7 Tahun 2022 tentang Standar Isi pada Pendidikan Anak Usia Dini, Jenjang Pendidikan Dasar, dan Jenjang Pendidikan Menengah.</a></li>
                      </ol>
                    <span class="type--bold">Peraturan Daerah</span>
                      <ol style="padding-left: 1.8em">
                        <li style="margin:0"><a href="#" target="_blank">Perda Nomor 2 Tahun 2017 tentang Penyelenggaraan Komunikasi dan Informatika</a></li>
                      </ol>
                    <span class="type--bold">Peraturan Walikota Balikpapan</span>
                      <ol style="padding-left: 1.8em">
                        <li style="margin:0"><a href="#" target="_blank">PERWALI Nomor 55 Tahun 2016 tentang SUSUNAN ORGANISASI, URAIAN TUGAS DAN FUNGSi</a></li>
                        <li style="margin:0"><a href="#" target="_blank">PERWALI Nomor 12 Tahun 2018 tentang PPDB </a></li>
                        <li style="margin:0"><a href="#" target="_blank">PERWALI Nomor 9 Tahun 2018 tentang Penyelenggaraan Pendidikan Inklusif</a></li>
                        <li style="margin:0"><a href="#" target="_blank">PERWALI Nomor 32 Tahun 2018 tentang Pembentukan, Susunan Organisasi, Uraian Tugas dan Fungsi Unit Pelaksana Teknis Daerah Satuan Pendidikan pada Dinas Pendidikan dan Kebudayaan Kota Balikpapan.Pembentukan, Susunan Organisasi, Uraian Tugas dan Fungsi Unit Pelaksana Teknis Daerah Satuan Pendidikan pada Dinas Pendidikan dan Kebudayaan Kota Balikpapan.</a></li>
                      </ol>
                  </div>
            </div>
        </div>
    </section> --}}
@endsection
