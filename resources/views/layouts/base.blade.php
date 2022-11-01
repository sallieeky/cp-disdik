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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    </head>
    <body class="">
        <a id="start"></a>
        <div class="nav-container">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <a href="index.html">
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
            <nav id="menu1" class="bar bar--sm bar-1 hidden-xs bar--absolute bar--transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-md-2 hidden-xs">
                            <div class="bar__module">
                                <a href="/">
                                    <img class="logo logo-dark" alt="logo" src="/logo.png" />
                                    <img class="logo logo-light" alt="logo" src="/logo.png" />
                                </a>
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                            <div class="bar__module">
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
                                                                <a href="#">
                                                                    Profil
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">
                                                                    Visi, Misi, dan Tujuan
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <a href="#">
                                                                    Struktur Organisasi
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
                                                                <a href="#">
                                                                    Berita
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
                                    </li>
                                    <li class="dropdown">
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
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Penghargaan</a>
                                    </li>
                                </ul>
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

            <footer class="footer-7 text-center-xs bg--secondary  ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="type--fine-print">&copy;
                                <span class="update-year"></span> Medium Rare &mdash; All Rights Reserved</span>
                        </div>
                        <div class="col-md-6 text-right text-center-xs">
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
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
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
    </body>
</html>
