@php
    use App\Models\Umum;

    $icon = Umum::where("nama", "icon")->first()->nilai;
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="description"
            content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities."
        />
        <meta
            name="keywords"
            content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app"
        />
        <meta name="author" content="pixelstrap" />
        <link
            rel="icon"
            href="/logo.png"
            type="image/x-icon"
        />
        <link
            rel="shortcut icon"
            href="/logo.png"
            type="image/x-icon"
        />
        <title>@yield("title") | Dashboard Company Profile Dinas Pendidikan Kota Balikpapan</title>
        <!-- Google font-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
            rel="stylesheet"
        />
        <!-- Font Awesome-->
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/fontawesome.css"
        />
        <!-- ico-font-->
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/icofont.css"
        />
        <!-- Themify icon-->
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/themify.css"
        />
        <!-- Flag icon-->
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/flag-icon.css"
        />
        <!-- Feather icon-->
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/feather-icon.css"
        />
        <!-- Plugins css start-->
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/date-picker.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/owlcarousel.css"
        />
        <link rel="stylesheet" type="text/css" href="/template-dashboard/assets/css/prism.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/whether-icon.css"
        />
        <link rel="stylesheet" type="text/css" href="/template-dashboard/assets/css/datatables.css">
        <!-- Plugins css Ends-->
        <!-- Bootstrap css-->
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/bootstrap.css"
        />
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="/template-dashboard/assets/css/style.css" />
        <link
            id="color"
            rel="stylesheet"
            href="/template-dashboard/assets/css/color-1.css"
            media="screen"
        />
        <!-- Responsive css-->
        <link
            rel="stylesheet"
            type="text/css"
            href="/template-dashboard/assets/css/responsive.css"
        />
        <!-- Custom css-->
        @yield("css")
    </head>
    <body>
        <!-- Loader starts-->
        <div class="loader-wrapper">
            <div class="theme-loader">
                <div class="loader-p"></div>
            </div>
        </div>
        <!-- Loader ends-->
        <!-- page-wrapper Start-->
        <div class="page-wrapper" id="pageWrapper">
            <!-- Page Header Start-->
            <div class="page-main-header">
                <div class="main-header-right row m-0">
                    <div class="main-header-left">
                        <div class="logo-wrapper">
                            <a href="/" target="_blank">
                                <img
                                    class="img-fluid"
                                    src="/storage/icon/{{ $icon }}"
                                    alt="Dashboard Company Profile Dinas Pendidikan Kota Balikpapan"
                                />
                            </a>
                        </div>
                        <div class="toggle-sidebar">
                            <i
                                class="status_toggle middle"
                                data-feather="align-center"
                                id="sidebar-toggle"
                            ></i>
                        </div>
                    </div>
                    <div class="left-menu-header col">
                        <p class="m-0 p-0"></p>
                    </div>
                    <div class="nav-right col pull-right right-menu p-0">
                        <ul class="nav-menus">
                            <li class="onhover-dropdown p-0">
                                <a class="btn btn-primary-light" href="/template-dashboard/theme/login_two.html"><i data-feather="log-out"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-lg-none mobile-toggle pull-right w-auto">
                        <i data-feather="more-horizontal"></i>
                    </div>
                </div>
            </div>
            <!-- Page Header Ends -->

            <!-- Page Body Start -->
            <div class="page-body-wrapper horizontal-menu">
                <!-- Page Sidebar Start-->
                <header class="main-nav">
                    <nav>
                        <div class="main-navbar">
                            <div class="left-arrow" id="left-arrow">
                                <i data-feather="arrow-left"></i>
                            </div>
                            <div id="mainnav">
                                <ul class="nav-menu custom-scrollbar">
                                    <li class="back-btn">
                                        <div class="mobile-back text-end">
                                            <span>Back</span
                                            ><i
                                                class="fa fa-angle-right ps-2"
                                                aria-hidden="true"
                                            ></i>
                                        </div>
                                    </li>
                                    <li class="sidebar-main-title">
                                        <div>
                                            <h6>Umum</h6>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="/dashboard/beranda"><i data-feather="home"></i><span>Beranda Dashboard</span></a></li>
                                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="/dashboard/umum"><i data-feather="settings"></i><span>Kelola Data Umum</span></a></li>
                                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="/dashboard/external-link"><i data-feather="external-link"></i><span>Kelola External Link</span></a></li>
                                    <li class="sidebar-main-title">
                                        <div>
                                            <h6>Kelola Halaman</h6>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a class="nav-link menu-title link-nav" href="/dashboard/kelola-halaman"><i data-feather="settings"></i><span>Kelola Halaman</span></a></li>
                                    {{-- <li class="dropdown">
                                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="settings"></i><span>Tentang kami</span></a>
                                        <ul class="nav-submenu menu-content">
                                            <li>
                                                <a href="/dashboard/kelola-halaman/profil">Profil</a>
                                            </li>
                                            <li>
                                                <a href="/dashboard/kelola-halaman/visi-misi-dan-tujuan">Visi, misi, dan tujuan</a>
                                            </li>
                                            <li>
                                                <a href="/dashboard/kelola-halaman/struktur-organisasi">Struktur organisasi</a>
                                            </li>
                                            <li>
                                                <a href="/dashboard/kelola-halaman/tugas-dan-fungsi">Tugas dan fungsi</a>
                                            </li>
                                            <li>
                                                <a href="/dashboard/kelola-halaman/rencana-strategis">Rencana strategis</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="settings"></i><span>Informasi</span></a>
                                        <ul class="nav-submenu menu-content">
                                            <li>
                                                <a href="/dashboard/kelola-halaman/berita">Berita</a>
                                            </li>
                                            <li>
                                                <a href="/dashboard/kelola-halaman/pengumuman">Pengumuman</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-link menu-title link-nav" href="/dashboard/kelola-halaman/regulasi"><i data-feather="settings"></i><span>Regulasi</span></a>
                                    </li>
                                    <li>
                                        <a class="nav-link menu-title link-nav" href="/dashboard/kelola-halaman/ppid"><i data-feather="settings"></i><span>PPID</span></a>
                                    </li>
                                    <li>
                                        <a class="nav-link menu-title link-nav" href="/dashboard/kelola-halaman/penghargaan"><i data-feather="settings"></i><span>Penghargaan</span></a>
                                    </li>
                                    <li class="sidebar-main-title">
                                        <div>
                                            <h6>Tambahan</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link menu-title link-nav" href="/dashboard/kelola-halaman"><i data-feather="plus-square"></i><span>Kelola halaman</span></a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="right-arrow" id="right-arrow">
                                <i data-feather="arrow-right"></i>
                            </div>
                        </div>
                    </nav>
                </header>
                <!-- Page Sidebar Ends-->
                <div class="page-body">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>@yield("title")</h3>
                                    <hr>
                                    <ol class="breadcrumb">
                                        {{-- <li class="breadcrumb-item">
                                            <a href="/template-dashboard/theme/index.html">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">Widgets</li>
                                        <li class="breadcrumb-item active">
                                            General
                                        </li> --}}
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Container-fluid starts-->
                    @yield("content")
                    <!-- Container-fluid Ends-->

                </div>
                <!-- footer start-->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 footer-copyright">
                                <p class="mb-0">
                                    &copy; 2022 Dinas Pendidikan dan Kebudayaan Kota Balikpapan
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p class="pull-right mb-0">
                                    Bidang Pengembangan Data & Jaringan Kependidikan
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- Page Body End -->

        </div>
        <!-- latest jquery-->
        <script src="/template-dashboard/assets/js/jquery-3.5.1.min.js"></script>
        <!-- feather icon js-->
        <script src="/template-dashboard/assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="/template-dashboard/assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- Sidebar jquery-->
        <script src="/template-dashboard/assets/js/sidebar-menu.js"></script>
        <script src="/template-dashboard/assets/js/config.js"></script>
        <!-- Bootstrap js-->
        <script src="/template-dashboard/assets/js/bootstrap/popper.min.js"></script>
        <script src="/template-dashboard/assets/js/bootstrap/bootstrap.min.js"></script>
        <!-- Plugins JS start-->
        <script src="/template-dashboard/assets/js/prism/prism.min.js"></script>
        <script src="/template-dashboard/assets/js/clipboard/clipboard.min.js"></script>
        <script src="/template-dashboard/assets/js/counter/jquery.waypoints.min.js"></script>
        <script src="/template-dashboard/assets/js/counter/jquery.counterup.min.js"></script>
        <script src="/template-dashboard/assets/js/counter/counter-custom.js"></script>
        <script src="/template-dashboard/assets/js/custom-card/custom-card.js"></script>
        <script src="/template-dashboard/assets/js/datepicker/date-picker/datepicker.js"></script>
        <script src="/template-dashboard/assets/js/datepicker/date-picker/datepicker.en.js"></script>
        <script src="/template-dashboard/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
        <script src="/template-dashboard/assets/js/owlcarousel/owl.carousel.js"></script>
        <script src="/template-dashboard/assets/js/general-widget.js"></script>
        <script src="/template-dashboard/assets/js/height-equal.js"></script>
        <script src="/template-dashboard/assets/js/tooltip-init.js"></script>
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="/template-dashboard/assets/js/script.js"></script>
        <!-- login js-->
        <!-- Plugin used-->
        <script src="/template-dashboard/assets/js/notify/bootstrap-notify.min.js"></script>
        <script src="/template-dashboard/assets/js/notify/notify-script.js"></script>
        <script src="/template-dashboard/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
        <script src="/template-dashboard/assets/js/datatable/datatables/datatable.custom.js"></script>

        @yield("script")
    </body>
</html>
