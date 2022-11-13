@extends('layouts.base')
@section('title', 'PPID')
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
                Penjelasan PPID
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

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <h3 class="type--bold color--primary">Apa itu PPID?</h3>
                  <h5 class="m-0"> PPID (Pejabat Pengelola Informasi dan Dokumentasi) </h5> 
                  <p>Adalah pejabat yang bertanggungjawab di bidang penyimpanan, pendokumentasian, penyadiaan dan/atau pelayanan informasi di badan publik</p>

                  <h5 class="m-0">UU No. 14 Tahun 2008 tentang Keterbukaan Informasi Publik</h5>
                  <ul style="list-style-type: disc; padding-left:1.8em">
                    <li>Bahwa informasi merupakan kebutuhan pokok setiap orang bagi pengembangan pribadi dan lingkungan sosialnya serta merupakan bagian penting bagi ketahanan nasional</li>
                    <li>Bahwa hak memperoleh informasi merupakan hak asasi manusia dan keterbukaan informasi publik merupakan salah satu ciri penting negara demokratis yang menjunjung tinggi kedaulatan rakyat untuk mewujudkan penyelenggaraan negara yang baik</li>
                    <li>Bahwa keterbukaan informasi publik merupakan sarana dalam mengoptimalkan pengawasan publik terhadap  penyelenggara negara dan badan publik lainnya dan segala sesuatu yang berakibat pada kepentingan publik</li>
                    <li>Bahwa pengelolaan informasi publik merupakan salah satu upaya untuk mengembangkan masyarakat informasi</li>
                  </ul>

                  <h3 class="type--bold color--primary">Klasifikasi Informasi</h3>
                  <ul style="list-style-type: disc; padding-left:1.8em">
                    <li>Informasi yang wajib diumumkan secara berkala/reguler (pasal 9)</li>
                    <li>Informasi yang wajib diumumkan secara serta merta (pasal 10)</li>
                    <li>Informasi yang wajib tersedia setiap saat (pasal 11)</li>
                    <li>Informasi yang dikecualikan (pasal 17)</li>
                  </ul>

                  <h3 class="type--bold color--primary">Mengapa harus ada PPID?</h3>
                  <p>Pemerintah merupakan badan publik (badan publik adalah lembaga eksekutif, legislatif, yudikatif dan badan lain yang fungsi dan tugas pokoknya berkaitan dengan penyelenggaraan negara yang sebagian atau seluruh dananya bersumber dari APBN dan/atau APBD atau organisasi non pemerintah sepanjang sebagian atau seluruh dananya bersumber dari APBN dan/atau APBD, sumbangan masyarakat, dan/atau luar negeri).</p>

                  <h3 class="type--bold color--primary">Alur permohonan informasi publik</h3>
                  <p class="m-0">Untuk melakukan permohonan informasi PPID dapat mengisi form pada <a href="https://goo.gl/forms/Trjr5168NQvNHGcn2" target="_blank" style="text-decoration: none; font-weight:600">Formulir permohonan informasi</a></p>
                  <img alt="Image" class="image" src="/storage/ppid/alur_permohonan.png" />

                  <h3 class="type--bold color--primary">Hak dan tata cara PPID</h3>
                  <p>Hak dan Tata cara memperoleh Informasi Publik dan Pengajuan Keberatan, dan Proses Penyelesaian sengketa IP berikut pihak-pihak yang bertanggung jawab yang dapat dihubungi (SOP PPID Kota Balikpapan yang berlaku di OPD) <br> 
                  <a href="http://disdikbud.balikpapan.go.id/web/images/REGULASI/Perwal_SOP_PPID_2015.pdf" target="_blank" style="text-decoration: none; font-weight:600">Download</a></p>

                  <h3 class="type--bold color--primary">Laporan Tahunan PPID</h3>
                  <p class="m-0">LAPORAN PELAYANAN PERMOHONAN INFORMASI OLEH PPID KOTA BALIKPAPAN DAPAT DI DOWNLOAD DI BAWAH INI</p>
                  <ul style="list-style-type: disc; padding-left:1.8em">
                    <li><a href="#" target="_blank">Bulan Januari s.d Desember 2018</a></li>
                    <li><a href="#" target="_blank">Bulan Januari s.d Desember 2019</a></li>
                  </ul>
                  
                </div>
            </div>
        </div>
    </section>
@endsection
