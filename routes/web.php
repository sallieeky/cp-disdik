<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExternalLinkController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\RegulasiController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// LANDING PAGE
Route::get('/', [LandingController::class, 'beranda']);
Route::get('/tes', function () {
  return view("tes");
});
Route::get('/tes2', function () {
  return view("tes2");
});
Route::post('/tes2', function (Request $request) {
  return $request;
});
Route::get('/tentang-kami', [LandingController::class, 'tentangKami']);
Route::get('/profil', [LandingController::class, 'profil']);
Route::get('/visi-misi-tujuan', [LandingController::class, 'visiMisi']);
Route::get('/struktur-organisasi', [LandingController::class, 'strukturOrganisasi']);
Route::get('/tugas-dan-fungsi', [LandingController::class, 'tugasFungsi']);
Route::get('/rencana-strategis', [LandingController::class, 'rencanaStrategis']);
Route::get('/berita', [LandingController::class, 'berita']);
Route::get('/berita/detail/{id}', [LandingController::class, 'beritaDetail']);
Route::get('/pengumuman', [LandingController::class, 'pengumuman']);
Route::get('/pengumuman/detail/{id}', [LandingController::class, 'pengumumanDetail']);
Route::get('/regulasi', [LandingController::class, 'regulasi']);
Route::get('/ppid', [LandingController::class, 'ppid']);
Route::get('/penghargaan', [LandingController::class, 'penghargaan']);

Route::get('/login', [DashboardController::class, 'login'])->middleware("guest")->name("login");
Route::post('/login', [DashboardController::class, 'loginPost']);

// DASHBOARD
Route::prefix('dashboard')->middleware(["auth"])->group(function () {
  Route::get('/', function () {
    return redirect("/dashboard/beranda");
  });
  Route::get('/beranda', [DashboardController::class, 'index']);
  Route::get('/umum', [DashboardController::class, 'umum']);
  Route::post('/umum/icon/ubah', [DashboardController::class, 'iconUbah']);
  Route::post('/umum/slider/tambah', [DashboardController::class, 'sliderTambah']);
  Route::post('/umum/slider/ubah', [DashboardController::class, 'sliderUbah']);
  Route::post('/umum/slider/hapus', [DashboardController::class, 'sliderHapus']);

  Route::get('/external-link', [ExternalLinkController::class, 'index']);
  Route::post('/external-link/tambah', [ExternalLinkController::class, 'tambah']);
  Route::post('/external-link/ubah', [ExternalLinkController::class, 'ubah']);
  Route::post('/external-link/hapus', [ExternalLinkController::class, 'hapus']);

  Route::get('/kelola-halaman', [DashboardController::class, 'kelolaHalaman']);
  // Route::get('/kelola-halaman/{halaman}', [DashboardController::class, 'kelolaHalamanDetail']);
  Route::get('/kelola-halaman/tentang-kami', [TentangKamiController::class, 'index']);
  Route::post('/kelola-halaman/tentang-kami/profil', [TentangKamiController::class, 'editProfil']);
  Route::post('/kelola-halaman/tentang-kami/visi-misi', [TentangKamiController::class, 'editVisiMisi']);
  Route::post('/kelola-halaman/tentang-kami/struktur-organisasi', [TentangKamiController::class, 'editStrukturOrganisasi']);
  Route::post('/kelola-halaman/tentang-kami/renstra/tambah', [TentangKamiController::class, 'tambahRencanaStrategis']);
  Route::post('/kelola-halaman/tentang-kami/renstra/ubah', [TentangKamiController::class, 'ubahRencanaStrategis']);
  Route::post('/kelola-halaman/tentang-kami/renstra/hapus', [TentangKamiController::class, 'hapusRencanaStrategis']);


  // Route::prefix('kelola-halaman')->group(function () {
  //   Route::get('/', [DashboardController::class, 'kelolaHalaman']);
  //   Route::get('/beranda', [BerandaController::class, 'index']);

  //   Route::get('/profil', [ProfilController::class, 'index']);
  //   Route::post('/profil/deskripsi/ubah', [ProfilController::class, 'deskripsiUbah']);
  //   Route::post('/profil/riwayat-profil/tambah', [ProfilController::class, 'riwayatProfilTambah']);
  //   Route::post('/profil/riwayat-profil/ubah', [ProfilController::class, 'riwayatProfilUbah']);
  //   Route::post('/profil/riwayat-profil/hapus', [ProfilController::class, 'riwayatProfilHapus']);

  //   Route::get('/visi-misi-dan-tujuan', [TentangKamiController::class, 'visiMisiDanTujuan']);
  //   Route::get('/struktur-organisasi', [TentangKamiController::class, 'strukturOrganisasi']);
  //   Route::get('/tugas-dan-fungsi', [TentangKamiController::class, 'tugasDanFungsi']);
  //   Route::get('/rencana-strategis', [TentangKamiController::class, 'rencanaStrategis']);

  //   Route::get('/berita', [InformasiController::class, 'berita']);
  //   Route::get('/pengumuman', [InformasiController::class, 'pengumuman']);

  //   Route::get('/regulasi', [RegulasiController::class, 'index']);
  //   Route::get('/ppid', [PpidController::class, 'index']);
  //   Route::get('/penghargaan', [PenghargaanController::class, 'index']);
  // });
});
