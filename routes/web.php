<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\RegulasiController;
use App\Http\Controllers\TentangKamiController;
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

// DASHBOARD
Route::prefix('dashboard')->group(function () {
  Route::get('/', [DashboardController::class, 'index']);
  Route::get('/external-link', [DashboardController::class, 'externalLink']);

  Route::prefix('kelola-halaman')->group(function () {
    Route::get('/', [DashboardController::class, 'kelolaHalaman']);

    Route::get('/beranda', [BerandaController::class, 'index']);

    Route::get('/profil', [TentangKamiController::class, 'profil']);
    Route::get('/visi-misi-dan-tujuan', [TentangKamiController::class, 'visiMisiDanTujuan']);
    Route::get('/struktur-organisasi', [TentangKamiController::class, 'strukturOrganisasi']);
    Route::get('/tugas-dan-fungsi', [TentangKamiController::class, 'tugasDanFungsi']);
    Route::get('/rencana-strategis', [TentangKamiController::class, 'rencanaStrategis']);

    Route::get('/berita', [InformasiController::class, 'berita']);
    Route::get('/pengumuman', [InformasiController::class, 'pengumuman']);

    Route::get('/regulasi', [RegulasiController::class, 'index']);
    Route::get('/ppid', [PpidController::class, 'index']);
    Route::get('/penghargaan', [PenghargaanController::class, 'index']);
  });
});
