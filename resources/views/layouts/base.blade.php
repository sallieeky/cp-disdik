@php
    use App\Models\ExternalLink;
    use App\Models\Umum;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\DB;

    $icon = Umum::where("nama", "icon")->first()->nilai;
    $pengunjung["semua"] = Umum::where("nama", "pengunjung")->count();
    $pengunjung["hari_ini"] = Umum::where("nama", "pengunjung")->whereDate("created_at", Carbon::today())->get()->count();
    $pengunjung["kemarin"] = Umum::where("nama", "pengunjung")->whereDate("created_at", Carbon::yesterday())->get()->count();
    $pengunjung["minggu_ini"] = Umum::where("nama", "pengunjung")->whereBetween("created_at", [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->count();
    $pengunjung["bulan_ini"] = Umum::where("nama", "pengunjung")->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get()->count();

    $infolink = ExternalLink::with("jenis_link")->whereRelation("jenis_link", "nama", "=", "Link Informasi")->get();
    $aplikasidisdik = ExternalLink::with("jenis_link")->whereRelation("jenis_link", "nama", "=", "Aplikasi Dinas Pendidikan")->get()
@endphp
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - Dinas Pendidikan Kota Balikpapan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
        <link href="/template/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/template/css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/template/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/template/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/template/css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/template/css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/template/css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/template/css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/template/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link rel="shortcut icon" href="/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="/fa/css/all.min.css">

        @yield("css")
    </head>
    <body class="">
        <a id="start"></a>
        <section class="bar bar-3 bar--sm bg--primary">
            <div class="px-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bar__module">
                            <span class="text-light">Dinas Pendidikan dan Kebudayaan Kota Balikpapan</span>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--end bar-->
        <div class="nav-container">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <a href="/">
                                <img class="logo logo-dark" alt="logo" src="/logo.png" />
                                <img class="logo logo-light" alt="logo" src="/logo.png" />
                            </a>
                        </div>
                        <div class="col-9 col-md-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <!--end bar-->
            <nav id="menu1" class="bar bar--lg bar-1 hidden-xs py-2 px-5">
                <div class="">
                    <div class="row">
                        <div class="col-lg-3 col-md-2 hidden-xs">
                            <div class="bar__module">
                                <a href="/">
                                    <img class="logo logo-dark" alt="logo" src="/storage/icon/{{ $icon }}" style="object-fit: cover; max-height:100px" />
                                    <img class="logo logo-light" alt="logo" src="/storage/icon/{{ $icon }}" style="object-fit: cover; max-height:100px" />
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-lg-9 col-md-12 text-right text-left-xs text-left-sm">
                            <div class="d-lg-flex align-items-lg-center justify-content-lg-end" style="height: 100%;">
                                <ul class="menu-horizontal text-left">
                                    <li class="dropdown">
                                        <a href="/">Beranda</a>
                                    </li>
                                    <li class="dropdown">
                                        <span class="dropdown__trigger">Tentang Kami</span>
                                        <div class="dropdown__container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="dropdown__content col-lg-2 col-md-4">
                                                        <ul class="menu-vertical">
                                                            <li class="">
                                                                <a href="/profil">
                                                                    Profil
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="/visi-misi-tujuan">
                                                                    Visi, Misi, dan Tujuan
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="/struktur-organisasi">
                                                                    Struktur Organisasi
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="/tugas-dan-fungsi">
                                                                    Tugas dan Fungsi
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">
                                                                    Rencana Strategis
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--end dropdown content-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <!--end dropdown container-->
                                    </li>
                                    <li class="dropdown">
                                        <span class="dropdown__trigger">Informasi</span>
                                        <div class="dropdown__container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="dropdown__content col-lg-2 col-md-4">
                                                        <ul class="menu-vertical">
                                                            <li class="">
                                                                <a href="/berita">
                                                                    Berita
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="/pengumuman">
                                                                    Pengumuman
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--end dropdown content-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <!--end dropdown container-->
                                    </li>
                                    <li class="dropdown">
                                        <a href="/regulasi">Regulasi</a>
                                    </li>
                                    {{-- <li class="dropdown">
                                        <span class="dropdown__trigger">Regulasi</span>
                                        <div class="dropdown__container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="dropdown__content col-lg-3 col-md-4">
                                                        <ul class="menu-vertical">
                                                            <li class="">
                                                                <a href="#">
                                                                    Regulasi Undang-undang
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">
                                                                    Regulasi Peraturan Pemerintah
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">
                                                                    Regulasi Peraturan Menteri
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">
                                                                    Regulasi Peraturan Daerah
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">
                                                                    Regulasi Peraturan Walikota
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--end dropdown content-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <!--end dropdown container-->
                                    </li> --}}
                                    <li class="dropdown">
                                        <a href="/ppid">PPID</a>
                                    </li>
                                    {{-- <li class="dropdown">
                                        <span class="dropdown__trigger">PPID</span>
                                        <div class="dropdown__container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="dropdown__content col-lg-2 col-md-4">
                                                        <ul class="menu-vertical">
                                                            <li class="">
                                                                <a href="/penjelasan-ppid">
                                                                    Penjelasan PPID
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">
                                                                    Pengumuman
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--end dropdown content-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <!--end dropdown container-->
                                    </li> --}}
                                    <li class="dropdown">
                                        <span class="dropdown__trigger">Anggaran</span>
                                        <div class="dropdown__container">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="dropdown__content col-lg-2 col-md-4">
                                                        <ul class="menu-vertical">
                                                            <li class="">
                                                                <a href="#">
                                                                    Menu 1
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">
                                                                    Menu 2
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--end dropdown content-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                        <!--end dropdown container-->
                                    </li>
                                    <li class="dropdown">
                                        <a href="/penghargaan">Penghargaan</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end module-->
                            <div class="bar__module">
                                {{-- <a class="btn btn--sm type--uppercase" href="#">
                                    <span class="btn__text">
                                        Try Builder
                                    </span>
                                </a>
                                <a class="btn btn--sm btn--primary type--uppercase" href="#">
                                    <span class="btn__text">
                                        Buy Now
                                    </span>
                                </a> --}}
                            </div>
                            <!--end module-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
            <!--end bar-->
        </div>
        <div class="main-container">

            @yield('content')

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
                                    @foreach ($infolink as $dt)
                                    <li class="col-md-3 col-6">
                                        <a href="{{ $dt->url }}" target="_blank">
                                            <img alt="Image" class="image--md" src="/storage/external-link/{{ $dt->gambar }}" />
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--end of col-->
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            {{-- END FOOTER --}}

            <footer class="footer-6 unpad--bottom  bg--dark ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 mb-5">
                            <h6 class="type--uppercase">Tentang kami</h6>
                            <p>
                                Dinas Pendidikan dan Kebudayaan merupakan sebuah lembaga negara yang bertugas untuk menyelenggarakan urusan pemerintahan di bidang pendidikan dan urusan pemerintahan di bidang kebudayaan, serta tugas pembantuan sesuai dengan ketentuan yang ada di dalam Undang-Undang.
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-5">
                            <h6 class="type--uppercase">External Link Aplikasi Dinas Pendidikan dan Kebudayaan</h6>
                            <div class="row">
                                @foreach ($aplikasidisdik as $dt)
                                <div class="col-md-6 mb-3">
                                    <a href="{{ $dt->url }}"><img src="/storage/external-link/{{ $dt->gambar }}"></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-5">
                            <h6 class="type--uppercase">Status Pengunjung</h6>
                            <div class="text-center">
                                <strong>TOTAL</strong>
                                <h3>{{ $pengunjung["semua"] }}</h3>
                            </div>
                            <div class="d-flex justify-content-between">
                                <small>Hari ini</small>
                                <small>{{ $pengunjung["hari_ini"] }}</small>
                            </div>
                            <div class="d-flex justify-content-between">
                                <small>Kemarin</small>
                                <small>{{ $pengunjung["kemarin"] }}</small>
                            </div>
                            <div class="d-flex justify-content-between">
                                <small>Minggu ini</small>
                                <small>{{ $pengunjung["minggu_ini"] }}</small>
                            </div>
                            <div class="d-flex justify-content-between">
                                <small>Bulan ini</small>
                                <small>{{ $pengunjung["bulan_ini"] }}</small>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6 class="type--uppercase">Lokasi</h6>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.879226619128!2d116.89368991453833!3d-1.2431514990932662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df145d9930e7ed7%3A0x9849b154cb9a871b!2sDinas%20Pendidikan%20Kota%20Balikpapan!5e0!3m2!1sid!2sid!4v1667717801662!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
                <div class="footer__lower text-center-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <span class="type--fine-print">
                                    &copy; <span class="update-year"></span> Dinas Pendidikan dan Kebudayaan Kota Balikpapan &mdash; Bidang Pengembangan Data & Jaringan Kependidikan</span>
                            </div>
                            {{-- <div class="col-md-6 text-right text-center-xs">
                                <ul class="social-list list-inline">
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-google icon icon--xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-twitter icon icon--xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-facebook icon icon--xs"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="socicon socicon-instagram icon icon--xs"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        <!--end of row-->
                    </div>
                    <!--end of container-->
                </div>
            </footer>
        </div>


        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="/template/js/jquery-3.1.1.min.js"></script>
        <script src="/template/js/flickity.min.js"></script>
        <script src="/template/js/easypiechart.min.js"></script>
        <script src="/template/js/parallax.js"></script>
        <script src="/template/js/typed.min.js"></script>
        <script src="/template/js/datepicker.js"></script>
        <script src="/template/js/isotope.min.js"></script>
        <script src="/template/js/ytplayer.min.js"></script>
        <script src="/template/js/lightbox.min.js"></script>
        <script src="/template/js/granim.min.js"></script>
        <script src="/template/js/jquery.steps.min.js"></script>
        <script src="/template/js/countdown.min.js"></script>
        <script src="/template/js/twitterfetcher.min.js"></script>
        <script src="/template/js/spectragram.min.js"></script>
        <script src="/template/js/smooth-scroll.min.js"></script>
        <script src="/template/js/scripts.js"></script>
        <script src="/fa/js/all.min.js"></script>

        @yield("script")
    </body>
</html>
